<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    static public function addProduct(Product $product){
        $cart = self::getCart();
        if(isset($cart[$product->id])){
            $cart[$product->id]++;
        }else{
            $cart[$product->id] = 1;
        }
        return $cart;
    }

    static public function removeProduct(Product $product){
        $cart = self::getCart();
        if(isset($cart[$product->id])){
            $cart[$product->id]--;
            if($cart[$product->id]< 1){
                unset($cart[$product->id]);
            }
        }
        return $cart;
    }

    static public function getCart(){
        $cart = json_decode(request()->cookie('cart'), true);
        if(!is_array($cart)){
            $cart = [];
        }
        return $cart;
    }

    static public function getCartProducts($cart){
        $products = [];
        foreach ($cart as $product_id => $amount){
            $products[] = Product::find($product_id);
        }
        return $products;
    }
}
