<?php

namespace App\Helpers ;
use App\Models\blog;
use App\Models\Product;

class Zand {
    public static function ttt (){
        $last_blog = blog::orderBy('count_view')->limit(4)->get();
        $last_products = Product::orderBy('count_view')->limit(4)->get();
        
        return [$last_blog,$last_products];

    }
}
