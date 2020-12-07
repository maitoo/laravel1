<?php
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'body' => 'required|max:1000'
        ];
    }
    public function attributes() {
        return [
            'body' => '内容'
        ];
    }
}