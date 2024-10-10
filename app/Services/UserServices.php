<?php

namespace App\Services;

use App\Base\ServiceResult;
use App\Base\ServiceWrapper;
use App\Models\User;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    public function registerUser(array $inputs):ServiceResult
    {
        return app(ServiceWrapper::class)(function() use($inputs){
            $inputs['password'] = Hash::make($inputs['password']);
            return User::create($inputs);
        });

}
}
