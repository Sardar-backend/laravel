<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\blogcategory;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isNull;

class api extends Controller
{
    public function index()
    {
        $users=Product::paginate(2);
        return response()->json([
            'data' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {



    }

    /**
     * Display the specified resource.
     */
    public function show(int $id )
    {
        $product = Product::find($id);
        return  response()->json([
            'data' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blogcategory $blogcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request ,blogcategory $blogcategory)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
