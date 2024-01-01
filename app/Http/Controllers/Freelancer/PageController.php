<?php

namespace App\Http\Controllers\Freelancer;

use App\Http\Controllers\DevController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Product;
use App\Models\ProductType;
use App\Models\Order;
use App\Models\OrderItem;

use App\Models\User;
use App\Models\Customer;
use App\Models\Link;
use App\Models\Freelancer;
use Auth;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
  public function index()
  {
    $freelancer = Auth::user()->freelancer;
    return view('freelancer.index', compact('freelancer'));
  }

  public function orders()
  {
    $query = Order::whereFreelancerId($this->freelancer()->id)->paginate();
    $freelancer = Auth::user()->freelancer;
    return view('freelancer.order', compact('list','freelancer'));
  }

  public function products()
  {
    $list = Product::wherePack('standard')->whereNull('sold_at')
      ->whereFreelancerId($this->freelancer()->id)->paginate();

    return view('freelancer.product', compact('list'))->with([
      'freelancer' =>  $this->freelancer(),
      'types'      =>  ProductType::get(),
    ]);
  }
  public function projects()
  {
    return view('freelancer.project')->with(['freelancer' =>  $this->freelancer()]);
  }

  public function customers()
  {
    $list = Customer::whereFreelancerId($this->freelancer()->id)->paginate();
    return view('freelancer.customer', compact('list'))->with(['freelancer' =>  $this->freelancer()]);
  }

  
}
