<?php

use App\Http\Middleware\adminmiddleware;
use Illuminate\Support\Facades\Route;

Route::get('admin',[App\Http\Controllers\admincontroller::class,'admin'])->middleware(adminmiddleware::class);
