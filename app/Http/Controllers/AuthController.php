<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())){
            return response()->json(["error" => "Unauthorized"], 401);
        }

        //$token = $this->createNewToken($token);

        return response([
            'message' => 'Success',
            'user' => $this->userData(auth()->user()),
            'token' => $token,
        ]);
    }

    public function loginMobile(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())){
            return response()->json(["error" => "Unauthorized"], 401);
        }

        return response([
            'message' => 'Success',
            'user' => $this->userData(auth()->user()),
            'token' => $token,
        ]);
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ["password" => bcrypt($request->password)]
        ));

        return response()->json([
           'message' => 'User successfully registered',
           'user' => $user,
        ], 201);
    }

    public function logout(){
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh(){
        return $this->createNewToken(auth()->refresh());
    }

    public function user(){
        return response()->json(auth()->user());
    }

    public function userData($user){
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;

        $userObject = [
            "user_id" => $id,
            "email" => $email,
            "name" => $name,
        ];

        return $userObject;
    }


    public function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $this->userData(auth()->user()),
        ]);
    }
}
