<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    protected $table = 'appoinment';

    protected $fillable = [
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
