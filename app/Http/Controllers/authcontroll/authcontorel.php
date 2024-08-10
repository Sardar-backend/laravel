<?php

namespace App\Http\Controllers\authcontroll;

use App\Http\Controllers\Controller;

use App\Models\activecode;

use App\Models\User;
use App\Notifications\notificationCode;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class authcontorel extends Controller
{
    public function login (){
        $u = User::where('id',1)->get();
        return view('p')->with('u',$u);
    }
    public function po(Request $request) {
        $gnn= $request->name;
        $u = User::where('phonenumber', $gnn)->get();
        try {
            $w= $u[0]->id;
        } catch (\Throwable $th) {
            $w= null;
        }

        $g= User::find($w);
        if ($g) {
            $code = activecode::createcode();
            // $b= $u[0]->activecode()->whereCode($code)->first();
            $fd=$u[0]->activecode[0]->code;
            // new notificationCode($code,$gnn);
            return view('enter2')->with('u', $fd);
        }else {

             User::create([
                 'phonenumber' => request('name')
             ]);
             $cb = User::where('phonenumber',$gnn)->get();
             $code = activecode::createcode();
             activecode::create([
                 'user_id' =>$cb[0]->id,
                 'code' => $code,
                 'expired_at'=> now()->addMinutes(10)
             ]);
            //  new notificationCode($code,$gnn);
            // return $code;
            return view('enter2')->with('u', $code);
        }
    }
    public function enter2(){
        return view('enter2');
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
