<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;

use Illuminate\Http\Request;
class homecontorel extends Controller
{
    public function index(){
        $pro = ModelsProduct::orderby('id')->get();
        return view('index');
    }

    public function about(){
        return view('about');
    }


    public function contact(){
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


    public function checkout(){
        return view('checkout');
    }


}
