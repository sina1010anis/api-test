<?php

namespace App\Http\Controllers\Api\v1;

use App\Exceptions\NotFoundError;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewItemApi;
use App\Http\Resources\Article;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\BankCollection;
use App\Http\Resources\CityCollection;
use App\Http\Resources\MenuCollection;
use App\Models\articel;
use App\Models\Bank;
use App\Models\City;
use App\Models\menu;
use App\Models\State;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ArticelController extends Controller
{
    public function index()
    {
        $bank = Bank::all();
        return (new \App\Http\Resources\BankCollection($bank));
    }

    public function show(Bank $id)
    {
        //throw new NotFoundError();
        return new \App\Http\Resources\Bank($id);
    }

    public function store(NewItemApi $request)
    {
        /*
        $msg = [

            'name|required' => 'نام خالی است',
            'name|min' => 'کمتر از 2 کارکتر برای نام مجاز نیست',
            'name|max' => 'بیشتر از 50 کارکتر برای نام مجاز نیست',
            'body|required' => 'متن را وارد نکرده ایید',
        ];
        $val = $request->validate([
            'name' => 'required|min:2;=|max:50',
            'body' => 'required',
        ], $msg);*/
        return $request->all();
        /*        $val = Validator::make($request->all() , [
                    'name' => 'required|min:2;=|max:50',
                    'body' => 'required',
                ]);
                if ($val->fails()){
                    return response()->json([
                        'data' => $val->errors(),
                        'msg' => 'err'
                    ],422);
                }else{
                    return response()->json([
                        'data' => $request->all()
                    ]);
                }*/
    }
}
