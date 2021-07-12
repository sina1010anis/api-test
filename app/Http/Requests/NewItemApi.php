<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewItemApi extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2;=|max:50',
            'body' => 'required',
        ];
    }

/*    public function messages()
    {
        return response()->json([
            'name|required' => 'نام خالی است',
            'name|min' => 'کمتر از 2 کارکتر برای نام مجاز نیست',
            'name|max' => 'بیشتر از 50 کارکتر برای نام مجاز نیست',
            'body|required' => 'متن را وارد نکرده ایید',
        ] , 422);
    }*/
}
