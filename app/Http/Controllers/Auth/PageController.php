<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\Order;
use App\Models\Contact;

use App\Models\OrderItem;
use App\Models\User;
use App\Models\Like;
use Auth;

class PageController extends Controller
{
  public function order(User $user)
  {
    $status= request('state',null);
    $query = Order::whereUserId($user->id);
    if($status){
      $query->whereState($status);
    }
    return view('auth.order', compact('query', 'user'));
  }
  public function favorites(User $user)
  {
    //$query = Like::whereUserId($user->id);
    $query = Product::whereHas('likes', function($query) use($user){
      $query->whereUserId($user->id);
    });
    return view('auth.favorites', compact('query','user'));
  }

  public function notify(User $user)
  {
   
    return view('auth.notify', compact('user'));
  }
  public function inbox(User $user)
  {
    $inbox  = Contact::Inbox($user)->orderByDesc('created_at')->paginate();
    $sent   = Contact::Sent($user)->orderByDesc('created_at')->paginate();
    return view('auth.inbox', compact('user','inbox','sent'));
  }
  public function setting(User $user)
  {
    return view('auth.setting', compact('user'));
  }
  public function transactions(User $user)
  {
    return view('auth.transactions', compact('user'));
  }

  public function reward(User $user)
  {
    return view('auth.reward', compact('user'));
  }

  public function profile(User $user)
  {
    $freelancer = $user->freelancerOrNew();
    $query = Product::root()->inventory()
    ->whereFreelancerId($freelancer->id);
    return view('auth.profile', compact(
      'user',
      'freelancer',
      'query'
    ));
  }

  public function join(User $user)
  {
    if (empty($user->freelancer))
      return view('auth.join', compact('user'));
    return redirect()->route('auth.profile', $user->id);
  }
}
