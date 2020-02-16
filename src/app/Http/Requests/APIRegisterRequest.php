<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class APIRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:30|min:2',
            'email' => 'required|email:rfc,dns|max:255|unique:users,email',
            'password' =>
                'required|min:8|max:12|regex:^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$|confirmed',
            'password_confirm' => 'required|same:password'
        ];
    }
}
