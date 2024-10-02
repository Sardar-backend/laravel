<?php

namespace App\Http\Controllers\Api;
use App\RestfulApi\AppendsBuilder;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApiUserList;
use App\Http\Resources\ApiUserListResource;
use App\Models\blogcategory;
use App\Models\contacts;
use App\Models\Product;
use App\Models\productcategory;
use App\Models\User;
use App\RestfulApi\ApiResponse;
use App\RestfulApi\Fecades\ApiResponseFacade;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler as LaravelExceptionHandler;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPUnit\Framework\isNull;
// use App\Services\UserServices;
use App\Services\UserServices;
class apiUser extends Controller
{
    public function __construct(private UserServices $userService) {
    }
    public function index()
    {
        $users=User::paginate(2);
        // return ApiUserListResource::collection($users);
        return (new AppendsBuilder())->withMessage('User created successfully')->withData($users)->build()->Response();

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
        try {
            // request()['name'] = $request->user()->name;
            $validator = Validator::make($request->all(),[
                'name' => ['required', 'string', 'max:255'],
                'phonenumber' => ['required' ,'max:255'],
                'meli_code' => ['required', 'max:255'],
                'image' => ['required'],
                'cart_number' => ['required',  'max:255'],
                'home_number' => ['required'  , 'max:255'],
                'email' => ['required',  'email', 'max:255'],
                'birthday' => ['required'],
                'is_superuser' => ['nullable']
            ]
            );
            if ($validator->fails()) {
                return response()->json(
                    [
                        'errors' => $validator->errors()
                    ] ,  422 );

                }
            $result = $this->userService->registerUser($validator->validate());
            $inputs = $validator->validated();
            // $inputs['password'] = Hash::make($inputs['password']);
            // $tiket = User::create($inputs);
            // return (new AppendsBuilder())->withMessage('User created successfully')->withData($tiket)->build()->Response();


            if (!$result['ok']) {
                return ApiResponseFacade::withMessage('User created successfully')->withData($result['data'])->build()->Response();
            }

        } catch (\Throwable $th) {
            app()[ExceptionHandler::class]->report($th);
            //throw $th;
            return response()->json([
                'massage' => 'errrrrrrrrrrrrrrr'
            ]);
        }


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
