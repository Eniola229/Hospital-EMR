<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Econter extends Model 
{
    use HasFactory;
    protected $table = "ecounter"; 

    protected $fillable = [
        'patient_id',
        'full_name',
        'unit',
        'ward',
        'consultant',
        'medical_officer',
        'presenting_complaint', 
        'physical_examination',
        'clinic_diagnosis',
        'history_presenting_complaint',
        'plan',
        'patientid',
    ];
}
