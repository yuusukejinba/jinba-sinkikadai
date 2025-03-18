<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

            'name' =>'required|string|max:255' ,
            'tel__1' =>'required|numeric' ,
            'tel__2' =>'required|numeric' ,
            'tel__3' =>'required|numeric' ,
            'item_id' =>'required' ,
            'channel_ids' => 'required' ,

                ];
        }


        public function messages()
        {
            return [

            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'tel__1.required' => '電話番号を入力してください',
            'tel__1.numeric' => '電話番号を数値で入力してください',
            'tel__2.required' => '電話番号を入力してください',
            'tel__2.numeric' => '電話番号を数値で入力してください',
            'tel__3.required' => '電話番号を入力してください',
            'tel__3.numeric' => '電話番号を数値で入力してください',
            'item_id.required' => '問い合わせの部品を選択してください',
            'channel_ids.required' => '知ったきっかけを選択してください',

            ];
        }

}