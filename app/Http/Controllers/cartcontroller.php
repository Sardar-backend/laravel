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
        $this->seo()->setTitle('سبد خرید')
        ->setDescription('سبد خرید خود را اینجا ببینید')
        ->opengraph()->setTitle('سبد خرید')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
         $products=Product::where('count_view','>', 20)->orderBy('failed_at')->limit(10)->get();
        //dd(Cart::all());
        return view('cart', compact('products'));
    }

    public function addToCart(Product $product , Request $request)
    {

        if(Cart::has($product)){
            Cart::update($product ,$request->quantity );
        }
        else{
            Cart::put(
                [
                    'quantity' => $request->quantity ,
                    'price' => $product->price,
                    'color' => $request->color
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


    public function updateCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    // یافتن محصول در سبد خرید
    $cartItem = Cart::where('product_id', $productId)->first();

    // به‌روزرسانی تعداد
    if ($cartItem) {
        $cartItem->quantity = $quantity;
        $cartItem->save();
        
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 400);
}
}
