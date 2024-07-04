<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table = "pharmacy"; 
    protected $fillable = [
        "patient_id",
        "doctors_name",
        "doctors_email",
        "patent_name",
        "patientid",
        "drugs",
        "doctors_comments",
    ];
}
 