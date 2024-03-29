<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;

use App\Models\Order;
use App\Models\OrderItem;

use App\Models\User;
use App\Models\Customer;
use App\Models\Freelancer;
use App\Models\Device;
use App\Models\Like;
use App\Patterns\ShopCart;
use App\Classes\Search;
use App\Classes\Setting;
use Auth;
use Theme;

class ShowController extends Controller
{

  public function login()
  {
    if (isset(Setting::get()->device)) {
      $info   =   Setting::get();
      $device   = $info->device;

      if (isset($device->lang)) {
        $info->locale   =   $device->lang;
        Setting::set($info);
      }

      if ($device->login_at) {
        Auth::loginUsingId($device->user_id);
      }
    }

    if (Auth::check()) return redirect()->route('app.main');
    //dd($token);
    return view('app.login');
  }
  public function main()
  {

    //if(!Auth::check())  return redirect()->route('app.login',$token);
    $recommendService    = Product::root()->inventory()
      ->so()
      ->take(6)->get();
    $recommendFreelancer  = Freelancer::take(4)->get();

    return view('app.main', compact(
      'recommendService',
      'recommendFreelancer',
    ));
  }



  public function freelancer(Freelancer $freelancer)
  {
    $recommendService  = Product::root()->inventory()
      ->whereFreelancerId($freelancer->id)
      ->orderBy('id', 'desc')
      ->paginate(12);
    return view('app.freelancer', compact(
      'recommendService',
      'freelancer'
    ));
  }

  public function product(Product $product)
  {
    //if(!Auth::check())  return redirect()->route('app.login',$token);
    $packs  =  $product->getPacks()->get();
    $freelancer = $product->freelancer;
    $recommendService  = Product::root()->inventory()
      ->where('freelancer_id', '<>', $product->freelancer_id)
      ->whereCategoryId($product->category_id)
      ->orderBy('id', 'desc')
      ->take(4)->get();

    return view('app.product', compact(
      'product',
      'packs',
      'freelancer',
      'recommendService'
    ));
  }

  public function category(Category $category = null)
  {

    $query  = Product::root()->inventory();
    if ($category) $query->category($category);

    $search = (new search('product'))->get();
    $query->search($search)->so();

    $recommendService    = $query->paginate(12);
    //dd($recommendService);
    return view('app.search', compact(

      'category',
      'recommendService',
    ));
  }

  public function search()
  {

    return $this->category();
  }


  /************* User */
  public function order(User $user)
  {
    $query = Order::whereUserId($user->id);
    return view('app.order', compact('query', 'user'));
  }
  public function favorites(User $user)
  {
    $list = Product::whereHas('likes', function ($query) use ($user) {
      $query->whereUserId($user->id);
    })->get();
    return view('app.favorites', compact('list', 'user'));
  }

  public function postRequest(User $user)
  {
    $query = null;
    return view('app.postRequest', compact('query', 'user'));
  }


  public function cart($product)
  {

    $cart     = ShopCart::find($product);

    if (empty($cart))  return back();

    $price    = $cart->quantity * $cart->item->price;
    $discount = 0;
    $tax      = 0;
    if (isset($cart->coupon)) {
      $discount += $price * $cart->coupon;
    }
    if (isset($cart->voucher)) {
      $discount += $cart->voucher;
    }
    $total  = $price + $tax  - $discount;
    $freelancer =  $cart->item->freelancer;
    $user = Auth::user();
    return view('app.cart', compact(
      'token',
      'user',
      'freelancer',
      'product',
      'cart',
      'discount',
      'price',
      'total'
    ));
  }

  public function afterPay(Order $order)
  {
    return view('app.thank', compact('order'));
  }

  public function logout()
  {
    Auth::logout();
    if (isset(Setting::get()->device)) {
      Setting::get()->device->logout();
      return redirect()->route('app.login', ['token' =>  Setting::get()->device->access_token]);
    }
    return redirect()->route('app.login');
  }
}
