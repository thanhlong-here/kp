<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\Freelancer;
use Auth;

class OrderController extends DevController
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Freelancer $freelancer)
  {
    $status = request('state', null);
    $query = Order::whereFreelancerId($freelancer->id)->where('state','<>','ordered');
    if ($status) {
      $query->whereState($status);
    }
    $query->orderByDesc('created_at');
    return view('dev.order.index', compact('freelancer', 'query'));
  }

  public function all()
  {
    $query = Order::orderByDesc('created_at');
    if (request('state')) {
      $query->whereState(request('state'));
    }
    return view('dev.order.all', compact('query'));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('dev.order.create');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function show(Order $order)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function edit(Order $order)
  {
    return view('dev.order.edit', compact('order'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Order $order)
  {
    $this->data = $request->input();
    switch ($request->act) {
      case 'accept':
        $order->accepted_at  = now();
        if($order->request_at){
          $order->state = 'process';
        }else{
          $order->state = 'request';
        }
        $back = ['status' => 'success', 'message' => 'accepted!'];
        break;
      case 'paid':
        $order->paid_at  = now();
        $order->state    = 'paid';
        $back = ['status' => 'success', 'message' => 'accepted!'];
        break;
      
      case 'cancel':
        $order->state  = 'canceled';
        $back = ['status' => 'success', 'message' => 'declined!'];
        break;

      default:
        $back = ['status' => 'success', 'message' => 'updated!'];
        break;
    }
    $order->update($this->data);
    return $this->back($back);
  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function destroy(Order $order)
  {
    $order->delete();
    return $this->back(['status' => 'success', 'message' => 'Đơn hàng đã được hủy!']);
  }
}
