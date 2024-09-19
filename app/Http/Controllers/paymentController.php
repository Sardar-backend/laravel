<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use RealRashid\SweetAlert\Facades\Alert;
use Shetabit\Multipay\Drivers\Payping\Payping;
// use Shetabit\Payment\Facade\Payment;
// use Rasulian\ZarinPal\Payment;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
class paymentController extends Controller
{

    protected $zarinPal;
    public function __construct(Payment $zarinPal){
        $this->zarinPal = $zarinPal;
    }
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




            return view('checkout',compact('all'));
    }
    Alert::error('خطا','سبد خرید شما خالی است');
    return back();
    }

    public function pay()
    {
    $FinalPrice =Cart::all()->sum(function($cart){  return $cart['price'] * $cart['quantity'];})  -  Cart::all()->sum(function($cart){return (($cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
    $amount = $FinalPrice ; // مبلغ پرداخت به تومان
    $invoice = Payment::purchase(
        (new Invoice)->amount($amount),
        function($driver='payping', $transactionId) {
            // ذخیره اطلاعات تراکنش در دیتابیس
        }
    )->pay()->toJson();

    return $invoice; // نمایش اطلاعات پرداخت
    }



    public function callback(Request $request)
{
    try {
        $FinalPrice =Cart::all()->sum(function($cart){  return $cart['price'] * $cart['quantity'];})  -  Cart::all()->sum(function($cart){return (($cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
        $receipt = Payment::amount($FinalPrice )->transactionId($request->transaction_id)->verify();
        // پرداخت موفقیت‌آمیز بود
        return 'پرداخت موفقیت‌آمیز بود';
    } catch (\Shetabit\Multipay\Exceptions\InvalidPaymentException $exception) {
        // پرداخت ناموفق بود
        return 'خطا در پرداخت: ' . $exception->getMessage();
    }
}
}
