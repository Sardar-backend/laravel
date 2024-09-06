<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\adresse;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class usercontorel extends Controller
{
    public function adresses (Request $request){
        $adresses = $request->user()->adresses()->get();

        return view('profile\addresses',compact('adresses'));
    }
    public function adresses_post (Request $request){
        $data = $request->validate([
            'ostan' => ['required'],
            'user_id' => ['required'],
            'tahvil' => ['required'],
            'city' => ['required'],
            'adress' => ['required'],
            'number' => ['required'],
            'post_number' => ['required'],
        ]);
        adresse::create($data);
        return back();
    }

    public function factors (){

        return view('profile\factors');
    }

    public function favorites (Request $request){
        $id=$request->user()->id;
        $favorite=User::find($id);

        $favorites=$favorite->favorite()->get();
        return view('profile\favorites',compact('favorites'));
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
