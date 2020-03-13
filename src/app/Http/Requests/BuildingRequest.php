<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingRequest extends FormRequest
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
            'entity_id' =>'required|numeric',
            'name' => 'required|string|min:4|max:50',
            'actual_address' => 'required|string|min:4|max:150',
            'registration_date' => 'required|date',
//            'fire_risk' => 'required|boolean',
            'appointment' => 'required|string|min:4|max:50',
            'appointment_in_detail' => 'required|string|min:4|max:150',
            'storeys' => 'required|digits_between:1,20',
            'room_location' => 'required|string|min:4|max:50',
//            'automated_process_control' => 'required|boolean',
//            'flammable_liquids' => 'required|boolean',
//            'gas_station' => 'required|boolean',
//            'cars_sale_and_exhibition' => 'required|boolean',
//            'high_shelving' => 'required|boolean',
//            'permanent_workplace' => 'required|boolean',
//            'ventilation' => 'required|boolean',
//            'smoke_protection_system' => 'required|boolean',
//            'distance_from_far_entry_point_less_then_25m' => 'required|boolean',
//            'corridors_length_less_then_15m' => 'required|boolean',
//            'people_in_building' => 'required|boolean',
//            'people_more_then_50' => 'required|boolean',
//            'people_more_then_10' => 'required|boolean',
//            'night_stay' => 'required|boolean',
//            'round_the_clock_stay' => 'required|boolean',
        ];
    }

    public function entity()
    {
        return $this->get('entity_id');
    }
}
