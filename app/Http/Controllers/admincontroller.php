<?php

namespace App\Http\Controllers;

use App\Http\Middleware\adminmiddleware;
use App\Models\User;


class admincontroller extends Controller
{
    public function admin (){

        $users = User::paginate(20);
        return view('admin.componnets.index3',compact('users'));
    }
    public function edit($id){

        $user = User::find($id);
        return view('admin.componnets.edit',compact('user'));
    }

    public function create(){
        return view('admin.componnets.create');
    }
}
