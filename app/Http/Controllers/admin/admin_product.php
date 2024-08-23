<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class admin_product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Product::query();
        if ($keyword=request('search')) {
            $users->where('name', 'LIKE', "%{$keyword}%")->orWhere('email', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%")->orWhere('phonenumber', 'LIKE', "%{$keyword}%");
        }
        $users=$users->paginate(20);
        return view('admin.componnets.product',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $data=$request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'phonenumber' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed']
        // ]);

        // Product::create($data);
        // return redirect()->route('admin');
        return view('admin.componnets.create_p');


}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=$request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:products'],
            'price' => ['required', 'string', 'max:255'],
            'discription' => ['required', 'string', 'max:255'],
            'stars' => ['required', 'string', 'max:255'],
            'with' => ['required', 'string', 'max:255'],
            'length' => ['required', 'string', 'max:255'],
            'discust' => ['required', 'string', 'max:255'],
            // 'garant	' => ['required', 'boolean'],
        ]);

        Product::create($data);
        return redirect()->route('admin_PRODUCT.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        // return redirect()->route('admin_PRODUCT.index');
        return back();
    }
}
