<?php

namespace App\Services;

use App\Base\ServiceResult;
use App\Models\User;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    public function registerUser(array $inputs):ServiceResult
    {
        try {
            $inputs['password'] = Hash::make($inputs['password']);
            $user=User::create($inputs);
        } catch (\Throwable $th) {
            app()[ExceptionHandler::class]->report($th->getMessage());
            return new ServiceResult(false, $th->getMessage());
        }

        return new ServiceResult(true,$user)
    }
}
