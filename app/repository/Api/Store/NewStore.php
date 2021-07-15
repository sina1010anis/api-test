<?php


namespace App\repository\Api\Store;


use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewStore
{
    protected $val;
    protected $request;
    public function validate_store(Request $request)
    {
        $val =  Validator::make($request->all(), [
            'name' => 'required|min:2|max:50',
            'body' => 'required',
        ]);
        $this->val = $val;
        $this->request = $request;
        return $this;
    }
    public function checked()
    {
        if ($this->val->fails()) {
            return response()->json([
                'data' => $this->val->errors(),
                'msg' => 'err'
            ], 422);
        } else {
            Item::create([
                'name' => $this->request->name,
                'body' => $this->request->body,
            ]);
            return response()->json([
                'data' => $this->request->all()
            ]);
        }
    }
}
