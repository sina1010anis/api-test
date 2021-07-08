<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class NotFoundError extends Exception
{
    public function render($request){
            if ($request->expectsJson()){
                return response()->json(['data'=>'Not Fund' ,'status' => 'ERR' ], 404);
            }else{
                return view('error.404');
            }
        }
}
