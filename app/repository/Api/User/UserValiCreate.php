<?php


namespace App\repository\Api\User;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserValiCreate extends Controller
{
    public function validate_User(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    }
    public function create(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => Str::random(100)
        ]);
    }
    public function check(Request $request)
    {
        $val = $request->validate([
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);
        /*$val = $this->validate($request , [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);*/

        if (!auth()->attempt($val)){
            return response([
                'data' => 'کاربر مورد نظر ثبت نام نکرده است',
                'status' => 'error',
            ] , 403);
        }else{
            return new \App\Http\Resources\User(auth()->user());
        }
    }
}
