<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class cartcontroller extends Controller
{
    public function Cart(){
         $products=Product::where('count_view','>', 20)->orderBy('failed_at')->limit(10)->get();

        return view('cart', compact('products'));
    }

    public function addToCart(Product $product)
    {
        if(Cart::has($product)){
            Cart::update($product ,1 );
        }
        else{
            Cart::put(
                [
                    'quantity' => 1,
                    'price' => $product->price
                ],
             $product
            );

            Alert::success('عملیات موفق آمیز بود',' محصول به سبد خرید شما اضافه شد');
        }
        return back();
    }

    public function deleteFromCart(Product $product){
        // dd($product instanceof Model);
        Cart::delete($product);
        return back();
    }

    public function deleteAll (){
        session()->forget('cart');

        return back();
    }
}
