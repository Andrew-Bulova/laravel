<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntityRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:50',
            'legal_address' => 'required|string|min:8|max:50',
            'tin' => 'required|numeric|regex:/\b\d{10}\b/',
            'contact_person' => 'required|string|min:4|max:50',
            'head_position' => 'required|string|min:3|max:50',
            'head_name' => 'required|string|min:4|max:50',
            'phone' => 'required|string|min:11|max:15',
            'email' => 'required|email|max:50',
        ];
    }
}
