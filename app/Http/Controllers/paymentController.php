<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Shetabit\Multipay\Drivers\Payping\Payping;
use Shetabit\Payment\Facade\Payment;

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
            $token = "توکن اختصاصی ";
            $args = [
                    "amount" =>' dd',
                "payerIdentity" => "شناسه کاربر در صورت وجود",
                "payerName" => "نام کاربر پرداخت کننده",
                "description" => "توضیحات",
                "returnUrl" => "آدرس برگشتی از سمت درگاه",
                "clientRefId" => "شماره فاکتور"
            ];

            $payment = new Payment($token);

            try {
                $payment->pay($args);
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
            //echo $payment->getPayUrl();

            header('Location: ' . $payment->getPayUrl());
            return view('checkout',compact('all'));
    }
    Alert::error('خطا','سبد خرید شما خالی است');
    return back();
}
}
