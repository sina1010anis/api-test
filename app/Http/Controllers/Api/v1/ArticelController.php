<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UploadFileRequest;
use App\Models\Bank;
use App\repository\Api\File\UploadFile;
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

    public function store(Request $request)
    {
        $val = Validator::make($request->all(), [
            'name' => 'required|min:2|max:50',
            'body' => 'required',
        ]);
        if ($val->fails()) {
            return response()->json([
                'data' => $val->errors(),
                'msg' => 'err'
            ], 422);
        } else {
            return response()->json([
                'data' => $request->all()
            ]);
        }
    }
    public function upload(UploadFileRequest $request , UploadFile $uploadFile){
        $uploadFile->upload($request)->view();
    }
}
