<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class cartcontroller extends Controller
{
    public function Cart(){
         $products=Product::where('count_view','>', 20)->orderBy('failed_at')->limit(10)->get();
        return view('cart', compact('products'));
    }

    public function addToCart(Product $product)
    {
        if(! Cart::has($product)) {
            Cart::put(
                [
                    'quantity' => 1,
                    'price' => $product->price
                ],
                $product
            );
        }

        return back();
    }
}
