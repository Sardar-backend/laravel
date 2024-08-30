<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class cartcontroller extends Controller
{
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

        return 'ok';
    }
}
