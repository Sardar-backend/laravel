<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\homecontorel::class,'index'])->name('index');

Route::get('/about',[\App\Http\Controllers\homecontorel::class,'about'])->name('about');

Route::get('/contact',[\App\Http\Controllers\homecontorel::class,'contact'])->name('contact');

Route::get('/error404',[\App\Http\Controllers\homecontorel::class,'error404'])->name('error404');

Route::get('/faq',[\App\Http\Controllers\homecontorel::class,'faq'])->name('faq');

Route::get('/products',[\App\Http\Controllers\homecontorel::class,'products'])->name('products');

Route::get('/products-list',[\App\Http\Controllers\homecontorel::class,'products_list'])->name('products-list');

Route::get('/compare',[\App\Http\Controllers\homecontorel::class,'compare'])->name('compare');

Route::get('/cart',[\App\Http\Controllers\homecontorel::class,'cart'])->name('cart');

Route::get('/checkout',[\App\Http\Controllers\homecontorel::class,'checkout'])->name('checkout');


Route::prefix('auth')->group(function(){

    Route::get('/login',[App\Http\Controllers\authcontroll\authcontorel::class,'login'])->name('login');

    Route::get('/reset',[App\Http\Controllers\authcontroll\authcontorel::class,'reset'])->name('reset');

    Route::get('/register',[App\Http\Controllers\authcontroll\authcontorel::class,'register'])->name('register');
});

Route::prefix('profile')->group(function(){

    Route::get('/adresses',[\App\Http\Controllers\admin\usercontorel::class,'adresses'])->name('adresses');

    Route::get('/factors',[\App\Http\Controllers\admin\usercontorel::class,'factors'])->name('factors');

    Route::get('/favorites',[\App\Http\Controllers\admin\usercontorel::class,'favorites'])->name('favorites');

    Route::get('/personal',[\App\Http\Controllers\admin\usercontorel::class,'personal'])->name('personal');
});
