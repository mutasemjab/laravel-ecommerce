<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'email' => 'required|email|unique:admins,email,'.$this->id,
            'name'=>'required',
            'password'=>'nullable|confirmed|min:8'
        ];
    }

    public function messages()
    {
        return[
            'email.required'=>"يجب ادخال البريد الإلكتروني",
            'email.unique'=>"البريد الإلكتروني موجود بالفعل جرب ايميلا آخر",
            'email.email'=>"يجب ادخال البريد الالكتروني بطريقه صحيحه",
            'name.required'=>"يجب إدخال الإسم"

        ];
    }
}
