<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Helpers\Cart\CartService;
use App\Models\blog;
use App\Models\Product;
use App\Notifications\notificationCode;
use App\Models\activecode;
use App\Models\comment;
use App\Models\contacts;
use App\Models\permission;
use App\Models\Product as ModelsProduct;
use App\Models\productcategory;
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
        $categorys=productcategory::all()->where('parent','LIKE',0);
        $blogs =blog::orderBy('failed_at')->limit(3)->get();

        $id=productcategory::where('name','گوشی موبایل')->get();
        $ttt=productcategory::find($id->first()->id);
        $mobile=$ttt->products()->limit(8)->get();

        $i=productcategory::where('name','لپ تاپ')->get();
        // dd($i);
        $tt=productcategory::find($i->first()->id);
        $lab=$tt->products()->limit(8)->get();

        $id=productcategory::where('name','تجهیزات کامپیوتر')->get();
        $ttt=productcategory::find($id->first()->id);
        $tag=$ttt->products()->limit(8)->get();

        $id=productcategory::where('name','دوربین')->get();
        $ttt=productcategory::find($id->first()->id);
        $dor=$ttt->products()->limit(8)->get();









        if (Gate::allows('edit')) {
            return 'Home';
        };
        $pro = ModelsProduct::where('Chosen',1)->get();
        $disusted = ModelsProduct::where('discust','>',20)->get();
        return view('index',compact('pro','categorys','blogs','mobile','tag','lab','dor','disusted'));
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
        Cart::get(1);
        Auth::loginUsingId(1);
        // alert()->success();
        return view('contact');
    }


    public function contact_post(Request $request){
        $data = $request->validate([
            'name' => ['required','string'],
            'email' =>['required','email'],
            'number_phone' => ['required'],
            'subject' => ['required','string'],
            'content' => ['required','string']
        ]);

        contacts::create($data);
        return back();
    }


    public function error404(){
        return view('error-404');
    }




    public function category(string $category){
        
        return view('error-404');
    }



    public function faq(){

        // return view('faq');
        Cart::get(5);
        return 'test';
    }


    public function products(){
        $products=Product::query();
        if ($keyword=request('search')) {
            $products= $products->where('name','LIKE',"%$keyword%")->orWhere('discription','LIKE',"%$keyword%")->orWhere('id','LIKE',"%$keyword%");
        }
        $products = $products->orderBy('failed_at')->paginate(20);
        return view('products',compact('products'));
    }


    public function blog_single(int $id){
        $blog=blog::find($id);
        $view=$blog->count_view + 1 ;
        $blog->update(['count_view' => $view]);
        $comments=$blog->comment()->where('status','LIKE',true)->where('parent_id','LIKE',0)->get();

        return view('blog-post',compact('blog','comments'));
    }

    public function product(int $id){
        $product = Product::find($id);
        if (is_null($product)) {
            return view('404');
        }
        $view=$product->count_view + 1 ;
        $product->update(['count_view' => $view]);
        $comments = $product->comment()->where('status','LIKE',true)->where('parent_id','LIKE',0)->get();

        //$user = Auth::user();
        $user =request()->user();
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
