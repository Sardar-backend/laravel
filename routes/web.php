<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home',[\App\Http\Controllers\homecontorel::class,'index'])->name('index');

Route::get('/about',[\App\Http\Controllers\homecontorel::class,'about'])->name('about');

Route::get('/contact',[\App\Http\Controllers\homecontorel::class,'contact'])->name('contact');

Route::get('/error404',[\App\Http\Controllers\homecontorel::class,'error404'])->name('error404');

Route::get('/faqn',[\App\Http\Controllers\homecontorel::class,'faq'])->name('faq');

Route::get('/products',[\App\Http\Controllers\homecontorel::class,'products'])->name('products');

Route::get('/product-{id}',[\App\Http\Controllers\homecontorel::class,'product'])->name('product');

Route::get('/products-list',[\App\Http\Controllers\homecontorel::class,'products_list'])->name('products-list');

Route::get('/compare',[\App\Http\Controllers\homecontorel::class,'compare'])->name('compare');

Route::get('/cart',[\App\Http\Controllers\homecontorel::class,'cart'])->name('cart')->middleware(['auth','password.confirm']);

Route::get('/checkout',[\App\Http\Controllers\homecontorel::class,'checkout'])->name('checkout')->middleware('password.confirm');


Route::get('/auth2',[\App\Http\Controllers\homecontorel::class,'getauth2'])->name('auth2');
Route::post('/auth2',[\App\Http\Controllers\homecontorel::class,'postauth2'])->name('postauth2');

Route::get('/t_auth2',[\App\Http\Controllers\homecontorel::class,'tokengetauth2'])->name('t_auth2');
Route::post('/t_auth2',[\App\Http\Controllers\homecontorel::class,'tokenpostauth2']);


Route::get('/adresses',[\App\Http\Controllers\admin\usercontorel::class,'adresses'])->name('adresses');

Route::get('/factors',[\App\Http\Controllers\admin\usercontorel::class,'factors'])->name('factors');

Route::get('/favorites',[\App\Http\Controllers\admin\usercontorel::class,'favorites'])->name('favorites');

Route::get('/personal',[\App\Http\Controllers\admin\usercontorel::class,'personal'])->name('personal');

Route::get('/p',[\App\Http\Controllers\authcontroll\authcontorel::class,'login'])->name('per');



Route::post('/pv',[\App\Http\Controllers\authcontroll\authcontorel::class,'po'])->name('perp');

// Route::get('/pv',[\App\Http\Controllers\authcontroll\authcontorel::class,'enter2']);

Route::get('/x',[\App\Http\Controllers\authcontroll\authcontorel::class,'log'])->name('x');
Auth::routes();

Route::get('/auth/google',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'redirect'])->name('auth.google');
Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'callback']);


Route::post('/create_comment',[\App\Http\Controllers\homecontorel::class,'craete_comment'])->name('create_comment')->middleware('auth');


Route::get('/blog',[\App\Http\Controllers\homecontorel::class,'blog_list'])->name('blog_list');

Route::get('/blog-single-{id}',[\App\Http\Controllers\homecontorel::class,'blog_single'])->name('blog_single');
