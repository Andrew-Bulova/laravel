<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractorRequest extends FormRequest
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
            'name' => 'required|string|min:4|max:100',
            'phone' => 'required|string|min:11|max:15',
//            'photo' => 'image',
            'legal_address' => 'required|string|min:4|max:150',
            'actual_address' => 'required|string|min:4|max:150',
            'registration_date' => 'required|date',
            'tin' => 'required|numeric|regex:/\b\d{10}\b/',
//            'mes_license_photo' => 'image',
            'mes_license_number' => 'required|string|min:4|max:30',
            'mes_license_date' => 'required|date',
//            'ira_accreditation_photo' => 'image',
            'ira_accreditation_number' => 'required|string|min:4|max:30',
            'ira_accreditation_date' => 'required|date',
//            'electric_laboratory_license_photo' => 'image',
            'electric_laboratory_license_number' => 'required|string|min:4|max:30',
            'electric_laboratory_license_date' => 'required|date',
//            'educational_license_photo' => 'image',
            'educational_license_number' => 'required|string|min:4|max:30',
            'educational_license_date' => 'required|date',
            'information' => 'required|string|min:4',
        ];
    }
}
