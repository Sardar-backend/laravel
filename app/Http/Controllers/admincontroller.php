<?php

namespace App\Http\Controllers;

use App\Http\Middleware\adminmiddleware;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function admin (){
        return view('admin');
    }
}
