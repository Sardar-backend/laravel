<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class usercontorel extends Controller
{
    public function adresses (){
        $pro = Product::orderby('id')->get();
        return view('profile\addresses');
    }

    public function factors (){
        return view('profile\factors');
    }

    public function favorites (){
        return view('profile\favorites');
    }

    public function personal (){
        return view('profile\personal-info');
    }
}

// public function login (){
//     return view('login');
// }

// public function reset (){
//     return view('reset');personal
// }

// public function register (){
//     return view('register');
// }
