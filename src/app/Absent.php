<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    protected $table = 'absents';
    protected $fillable = [
        'date',
        'student_id'
    ];
    public $timestamps = false;

    protected function student()
    {
        return $this->hasOne(Student::class, 'user_id', 'id');
    }
}
