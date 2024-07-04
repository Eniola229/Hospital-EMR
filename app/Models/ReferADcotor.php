<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferADcotor extends Model
{
    use HasFactory;

    protected $table = "refer_doctor";

    protected $fillable = [
        'doctor_email',
        'patient_id',
        'patient_email',
        'message_sent',
        'refer_from_name',
        'refer_from_email',
    ];
}
