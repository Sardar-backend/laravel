<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class paymentController extends Controller
{
    public function checkout(Request $request){
        $this->seo()->setTitle('پیش فاکتور')
        ->setDescription('پیش فاکتور خود را اینجا مشاهده کنید')
        ->opengraph()->setTitle('پیش فاکتور')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $all=Cart::all();
        if ($all) {
            $price = $all->sum(function($cart){
                return $cart['product']->price * $cart['quantity'];
            });
            $orderitem =$all->mapWithKeys(function($cart){
                return [$cart['product']->id => [ 'quantity' => $cart['quantity']]];
            });
            $order=request()->user()->orders()->create([
                'status' => 'unpaid',
                'price' => $price
            ]);
            // dd($order->id);
            $order->product()->attach($orderitem);
            return view('checkout',compact('all'));
    }
    Alert::error('خطا','سبد خرید شما خالی است');
    return back();
}
}
