<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'nameInput' => 'required|min:4|max:30',
            'userProfilePhoto' =>'required|image',
            'dateBirthday' => 'required|date',
            'userGender' => ['required', Rule::in(['male', 'female'])],
            'userCountry' =>'required',
            'userCity' => 'required|string',
            'userAboutYourself' => 'required|min:10'
        ];
    }
}
