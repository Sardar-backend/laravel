<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\adresse;
use App\Models\blogcategory;
use App\Models\contacts;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\User;
use App\RestfulApi\Fecades\ApiResponseFacade;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler as LaravelExceptionHandler;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isNull;

class apiAdresse extends Controller
{
    public function index()
    {
        $users=adresse::with('user:id,name')->paginate(2);
        return ApiResponseFacade::withData($users)->withMessage('sssdsssdsd')->build()->Response();
        // return response()->json([
        //     'data' => $users,
        // ]);
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
        // try {
        //     request()['name'] = $request->user()->name;
        //     $validator = Validator::make($request->all(),[
        //     'name' => ['required','string'],
        //     , 'email' => ['required','email'],
        //     'number_phone' => ['required'],
        //      'content' => ['required','text'],
        //      ,'subject' => ['required','string'],
        //      'password' => ['required','password']
        //     ]
        //     );
        //     if ($validator->fails()) {
        //         return response()->json(
        //             [
        //                 'errors' => $validator->errors()
        //             ] ,  422 );

        //         }
        //     $inputs = $validator->validated();
        //     $inputs['password'] = Hash::make($inputs['password']);
        //     $tiket = User::create($inputs);
        //     return response()->json([
        //         'massage' => 'User created successfully',
        //         'data' => $tiket

        //     ]);

        // } catch (\Throwable $th) {
        //     app()[ExceptionHandler::class]->report($th);
        //     //throw $th;
        //     return response()->json([
        //         'massage' => 'errrrrrrrrrrrrrrr'
        //     ]);
        // }


    }

    /**
     * Display the specified resource.
     */
    public function show(int $id )
    {
        $product = User::find($id);
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
        try {
            User::find($id)->delete();

        } catch (\Throwable $th) {
            app()[ExceptionHandler::class]->report($th);
            //throw $th;
            return response()->json([
                'massage' => 'errrrrrrrrrrrrrrr'
            ]);
        }
    }
}
