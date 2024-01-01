<?php

namespace App\Http\Controllers\Dev;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\Freelancer;
use Illuminate\Support\Carbon;

class PageController extends Controller
{

    public function index()
    {
        $summary=[
            'order'    => Order::count(),
            'product'  => Product::count(),
            'customer' => Customer::count(),
            'total'    => Order::whereState('confirm')->sum('total')
        ];
        $freelancers = Freelancer::OrderByDesc('created_at')->take(6)->get();

        for ($i = 7; $i > 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $ymd  = $date->format('Y-m-d');
            $dmy  = $date->format('d-m-Y');
            $x[]  = $dmy;
            $customer[] = Customer::whereDate('created_at',$ymd)->count();
            $service[]  = Product::whereDate('created_at',$ymd)->count();   
            $order[]   = Order::whereDate('created_at',$ymd)->count();
        }
        
        return view('dev.dashboard',compact('summary','freelancers','x','customer','service','order'));
    }
    public function login()
    {
        return view('dev.login');
    }
}
