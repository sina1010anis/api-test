<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $val = $this->validate($request , [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);
        if (!auth()->attempt($val)){
            return response([
                'data' => 'کاربر مورد نظر ثبت نام نکرده است',
                'status' => 'error',
            ] , 403);
        }else{
            return new \App\Http\Resources\User(auth()->user());
        }
    }

    public function register(Request $request)
    {
        $val = $this->validate($request ,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        User::create([
            'name' => $val['name'],
            'email' => $val['email'],
            'password' => bcrypt($val['password']),
            'api_token' => Str::random(100)
        ]);
        return new UserResource($val);
    }
}
