<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ArticelController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('all' ,[ArticelController::class , 'index']);
Route::get('/one/{id}' ,[ArticelController::class , 'show']);
Route::post('/new/item' ,[ArticelController::class , 'store']);
Route::post('login' , [\App\Http\Controllers\Api\v1\UserController::class , 'login']);
Route::post('register' , [\App\Http\Controllers\Api\v1\UserController::class , 'register']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return new \App\Http\Resources\UserPassport(auth()->user());
});
Route::post('/upload' , [ArticelController::class , 'upload']);
