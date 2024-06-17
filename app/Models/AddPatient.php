<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPatient extends Model
{
    use HasFactory;


    protected $table = "patients";

    protected $fillable = [
        'avatar',
        'patientID',
        'full_name',
        'email',
        'state_of_residence',
        'date_of_birth', 
        'phone_number',
        'home_address',
        'by_who_name',
        'by_who_email',
        'message_sent',
        'time_send',
        'password',
    ];
}
