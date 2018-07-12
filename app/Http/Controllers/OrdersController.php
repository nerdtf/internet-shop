<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cart;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index')->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create(){
        $cart = Cart::getCart();
        if(count($cart) < 1){
            return redirect('/');
        }
        $products = Cart::getCartProducts($cart);
        return view('orders.create', compact('cart','products'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(){
            $this->validate(request(),[
            'customer_name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|min:5'
        ]);

        $order = Order::create(request()->all());


        $cart = Cart::getCart();
        foreach ($cart as $product_id => $amount){
            $order->products()->attach($product_id, ['amount' => $amount]);
        }
        request()->session()->flash('status', 'Order is accepted');
        return redirect('/')->withCookie('cart', json_encode([]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order){
        return view('orders.show')->with(compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
