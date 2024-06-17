<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointmentdoc extends Model
{
    use HasFactory;

     protected $table = 'appoinmentdoc';

    protected $fillable = [
        'doctor_name',
        'doctor_email',
        'doctor_special',
        'name',
        'phone_number',
        'home_address',
        'state_of_residence',
        'department',
        'a_date',
        'complain',
        'email',
    ];
}
