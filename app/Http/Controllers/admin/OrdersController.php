<?php

namespace App\Http\Controllers\admin;

use App\Http\Middleware\IsAdmin;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmin::class);
    }

    public function index(){
        $orders = Order::all();

        return view('admin.orders.index', compact('orders'));
    }

    public function removeProduct(Order $order, Product $product){
        $order->products()->detach($product->id);

        request()->session()->flash('status', 'Order deleted');

        return back();
    }
}
