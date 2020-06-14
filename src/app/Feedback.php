<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = [
        'target_type', 'target_id', 'feedback'
    ];

    public function target()
    {
        return $this->morphTo();
    }
}
