<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /*public function authorize()
    {
        if ($this->path() == 'information/create')
        {
            return true;
        } else {
            return false;
        }
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //必須項目、最大文字数20文字
            'store_name' => 'required|max:20',
            //必須項目
            'rural_code' => 'required',
            //必須項目
            'area' => 'required',
            //必須項目
            'store_stype' => 'required',
            //null可
            'photo_pass' => 'nullable',
            //必須項目
            'store_information' => 'required',
            //最大文字数30文字
            'street_address' => 'max:30',
            //url形式で書かれているか？
            'url' => 'url|nullable',
            //文字列の値か？
            'religion' => 'string|nullable',
            //必須項目
            'allergies' => 'required',
            //必須項目
            'store_introduction' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'store_name.required' => '店名は必須項目です。',
            'store_name.max' => '最大文字数は20文字です。',
            'rural_code.required' => '都道府県は必須項目です。',
            'area.required' => 'エリアは必須項目です。',
            'store_stype.required' => '店の種類は必須項目です。',
            'store_information.required' => '店情報は必須項目です。',
            'street_address.max' => '最大文字数は30文字です。',
            'url.url' => '無効なURLです。',
            'religion.string' => '文字列で入力して下さい。',
            'allergies.required' => 'アレルギー情報は必須項目です。',
            'store_introduction.required' => '紹介文は必須項目です。',
        ];
    }
}
