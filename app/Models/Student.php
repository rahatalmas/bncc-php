<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'semester',
        'student_id',
        'email',
        'subject',
        'birth_year',
        'admission_year',
        'institute_name',
        'chest_size',
        'height',
        'weight',
        'blood_group',
        'doctors_speech',
        'fathers_name',
        'mothers_name',
        'nationality',
        'religion',
        'interested_area',
        'agree_bncc_rules',
        'purpose_in_life',
        'form_date',
        'image',
        'pending',
    ];

    protected $casts = [
        'birth_year' => 'date',
        'form_date' => 'date',
        'agree_bncc_rules' => 'boolean',
    ];
}
