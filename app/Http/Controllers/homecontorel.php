<?php

namespace App\Http\Controllers;
use App\Notifications\notificationCode;
use App\Models\activecode;
use App\Models\Product as ModelsProduct;
use App\Models\User;
use Illuminate\Http\Request;
class homecontorel extends Controller
{
    public function index(Request $request){
        // if ($request->user()->is_superuser){
        //     return 'Home';}
        $pro = ModelsProduct::orderby('id')->get();
        return view('index')->with('pro', $pro);
    }
    public function about(){
        alert()->success('cdsdcscsd' , 'scsdcsd')->persistent(' dffdvf!');
        return view('about');
    }


    public function contact(){
        // alert()->success();
        return view('contact');
    }


    public function error404(){
        return view('error-404');
    }


    public function faq(){
        return view('faq');
    }


    public function products(){
        return view('products');
    }

    public function products_list(){
        return view('products-list');
    }

    public function compare(){
        return view('compare');
    }

    public function cart(){
        return view('cart');
    }


    public function checkout(Request $request){
        $d=$request->user()->phonenumber;
        $code = activecode::createcode();
        $request->user()->notify(new notificationCode($code,$d));
        return view('checkout');
    }

    public function getauth2 (){
        return view('auth2');
    }

    public function postauth2(Request $request){
        $data = $request->validate([
            'phonenumber' => 'required'
        ]);
        return $data;
    }

    public function tokengetauth2 () {
        return view('tokenauth2');
    }

    public function activcode(){
        User::create([
            'code' => 1111 ,
            'expired_at'=> now()->addMinutes(10)

        ]);
    }
}
