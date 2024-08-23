<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\Product;
use App\Notifications\notificationCode;
use App\Models\activecode;
use App\Models\comment;
use App\Models\Product as ModelsProduct;
use App\Models\User;

use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;

class homecontorel extends Controller
{
    public function index(Request $request){
        Auth::loginUsingId(1);
        // Auth::logout();
        // if ($request->user()->is_superuser){
        //     return 'Home';}
        if (Gate::allows('edit')) {
            return 'Home';
        };
        $pro = ModelsProduct::orderby('id')->get();
        return view('index')->with('pro', $pro);
    }
    public function about(){
        // alert()->success('cdsdcscsd' , 'scsdcsd')->persistent(' dffdvf!');
        return view('about');
    }

    public function blog_list(){
        $blogs=blog::orderBy('failed_at')->get();
        return view('blog',compact('blogs'));
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


    public function blog_single(string $id){
        $blog=blog::find($id);
        return view('blog-post',compact('blog'));
    }

    public function product(int $id){
        Auth::loginUsingId(1);
        $product = Product::find($id);
        if (is_null($product)) {
            return view('404');
        }

        $comments = $product->comment()->where('status','LIKE',true)->where('parent_id','LIKE',0)->get();

        $user = Auth::user();
        return view('product',compact('product','comments','user'));
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


    public function craete_comment(Request $request){
        $data = $request->validate([
            'parent_id' => 'max:255',
            'user_id' => 'required',
            'commenttable_id' => 'required',
            'commenttable_type' => 'required',
            'content' => 'required',

        ]);
        comment::create($data);
        return back();
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
