<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\productcategory;
use Illuminate\Http\Request;

class ProductListcontroller extends Controller
{
    public function products(){
        $products=Product::query();
        if ($keyword=request('search')) {
            $products= $products->where('name','LIKE',"%$keyword%")->orWhere('discription','LIKE',"%$keyword%")->orWhere('id','LIKE',"%$keyword%")->orderBy('failed_at');
        }
        if ( $to=request('up')){
            $from = preg_replace("/,/",'',request()->get('from'));
            $up = preg_replace("/,/",'',request()->get('up'));
            $products=Product::whereBetween('price' , [$from,$up]);
        }
        $categories=productcategory::orderBy('updated_at')->limit(4)->get();
        $products = $products->paginate(2);
        return view('products',compact('products','categories'));
    }


    public function products_status(){
        $products=Product::query();
        $products= $products->where('garant','LIKE',true)->orderBy('failed_at');
        $products = $products->paginate(10);
        $categories=productcategory::orderBy('updated_at')->limit(4)->get();
        return view('products',compact('products','categories'));
    }

    public function products_Existing(){
        $products=Product::query();
        $products= $products->where('count','>',0)->orderBy('failed_at');
        $products = $products->paginate(10);
        $categories=productcategory::orderBy('updated_at')->limit(4)->get();
            return view('products',compact('products','categories'));
        }

        public function products_cheapest(){
            $products=Product::query();
            $products= $products->orderBy('price');
            $products = $products->paginate(10);
            $categories=productcategory::orderBy('updated_at')->limit(4)->get();
            return view('products',compact('products','categories'));
        }

        public function products_popular(){
            $products=Product::query();
            $products= $products->orderBy('count_view');
            $products = $products->paginate(10);
            $categories=productcategory::orderBy('updated_at')->limit(4)->get();
            return view('products',compact('products','categories'));
        }

        public function products_list(){
            return view('products-list');
        }

    }
