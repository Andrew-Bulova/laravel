<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    const CLASSNAME = __CLASS__;

    protected $table = 'contractors';

    protected $fillable = [
        'phone',
        'name',
        'photo',
        'legal_address',
        'actual_address',
        'registration_date',
        'tin',
        'mes_license_photo',
        'mes_license_number',
        'mes_license_date',
        'ira_accreditation_photo',
        'ira_accreditation_number',
        'ira_accreditation_date',
        'electric_laboratory_license_photo',
        'electric_laboratory_license_number',
        'electric_laboratory_license_date',
        'educational_license_photo',
        'educational_license_number',
        'educational_license_date',
        'information'
    ];

    public function feedback()
    {
        return $this->morphMany(Feedback::class, 'target');
    }

}
