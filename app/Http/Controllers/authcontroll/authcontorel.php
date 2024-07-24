<?php

namespace App\Http\Controllers\authcontroll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontorel extends Controller
{
    public function login (){
        return view('auth\login');
    }

    public function reset (){
        return view('auth/reset-password');
    }

    public function register (){
        return view('auth/register');
    }
}
