<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use function PHPUnit\Framework\isNull;

class admin_user extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->seo()->setTitle(' مدیریت کاربران')
        ->setDescription('مدیریت کاربران')
        ->opengraph()->setTitle(' مدیریت کاربران')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        // $users = User::paginate(20);
        $users = User::query();
        if ($keyword=request('search')) {
            $users=$users->where('name', 'LIKE', "%{$keyword}%")->orWhere('email', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%")->orWhere('phonenumber', 'LIKE', "%{$keyword}%");
        }

        $users=$users->latest()->paginate(20);


        return view('admin.componnets.index3',compact('users'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->seo()->setTitle(' مدیریت کاربران')
        ->setDescription('مدیریت کاربران')
        ->opengraph()->setTitle(' مدیریت کاربران')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('admin.componnets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        User::create($data);
        return redirect()->route('admin');
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
        $this->seo()->setTitle(' مدیریت کاربران')
        ->setDescription('مدیریت کاربران')
        ->opengraph()->setTitle(' مدیریت کاربران')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $user= User::find($id);
        return view('admin.componnets.edit',compact('user'));
    }


     public function edituser (Request $request,string $id )
     {
        $user= User::find($id);
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        // dd($data);
        // if (!isNull($request->password)) {
        //     $request->validate(['password' => ['required', 'string', 'min:8', 'confirmed']]);

        //     $data['password']=$request->password;
        // }
        $user->update($data);

        return redirect()->route('admin');
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
        User::find($id)->delete();
        return redirect()->route('admin');
    }
}
