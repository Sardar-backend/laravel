<?php

use App\Http\Middleware\adminmiddleware;
use Illuminate\Support\Facades\Route;



Route::apiResource('user',App\Http\Controllers\api\apiUser::class);
Route::apiResource('adresse',App\Http\Controllers\api\apiAdresse::class);
