<?php

namespace App\Http\Controllers;

use App\Http\Middleware\adminmiddleware;
use App\Models\User;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function admin (){
        $users = User::paginate(20);
        return view('admin.componnets.index3',compact('users'));
    }
}
