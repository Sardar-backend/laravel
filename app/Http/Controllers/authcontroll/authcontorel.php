<?php

namespace App\Http\Controllers\authcontroll;

use App\Http\Controllers\Controller;

use App\Models\activecode;

use App\Models\User;

use Illuminate\Http\Request;



class authcontorel extends Controller
{
    public function login (){
        $u = User::where('id',1)->get();
        return view('p')->with('u',$u);
    }
    public function po(Request $request) {
        $g= $request->name;
        $u = User::where('phonenumber', $g)->get();
        try {
            $w= $u[0]->id;
        } catch (\Throwable $th) {
            $w= null;
        }

        $g = User::find($w);
        if ($g) {
            $code = activecode::createcode();
            $b= $u[0]->activecode()->whereCode($code)->first();
            dd($u[0]->activecode[0]->code);
            //  return view('p')->with('u', $u);
        }else {

             User::create([
                 'phonenumber' => request('name')
             ]);
             $code = activecode::createcode();
             activecode::create([
                 'user_id' =>2,
                 'code' => $code,
                 'expired_at'=> now()->addMinutes(10)
             ]);


             return $code;
        }
    }

    public function log (){
        $vv = activecode::where('code',1111)->first();
        if ($vv) {
            return !! $vv;
        }
    }

    // public function reset (){
    //     return view('auth/reset-password');
    // }

    // public function register (){
    //     return view('auth/register');
    // }
}
