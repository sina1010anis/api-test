<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\Models\Bank;
use App\repository\Api\File\UploadFile;
use App\repository\Api\Store\NewStore;
use Illuminate\Http\Request;
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

    public function store(Request $request , NewStore $newStore)
    {
        // متدد  validate_store وظیفه اعتبار سنجی را دارد و ذخیره اعتبار سنجی و ذخیره خود request را دارد متدد checked وظیفه چک اعتبار سنجی را دارد و ذخیره
        return $newStore->validate_store($request)->checked();
    }
    public function upload(UploadFileRequest $request , UploadFile $uploadFile){
        //متدد upload وظیفه اپلود عکس را دارد و متدد view وظیفه نمایش فایل اپلودی را دارد
        $uploadFile->upload($request)->view();
    }
}
