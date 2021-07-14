<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\repository\Api\User\UserValiCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public $UserVal;
    public function __construct()
    {
        $this->UserVal = new UserValiCreate();
    }

    public function login(Request $request)
    {
        return $this->UserVal->check($request);
    }

    public function register(Request $request)
    {
        $this->UserVal->validate_User($request);
        $this->UserVal->create($request);
        return new UserResource($request);
    }
}
