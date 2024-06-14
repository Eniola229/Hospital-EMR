<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Hospital\AppointmentController; 
use App\Http\Controllers\Hospital\ShowController; 
use App\Http\Controllers\Hospital\ViewComplainsController; 
use App\Http\Controllers\Hospital\ViewStaffController; 
use App\Http\Controllers\Hospital\ViewStaffSpecifiController; 
use App\Http\Controllers\Hospital\AppointmentDocController; 

//This is the route for all page
Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('/complains', function () {
    return view('complains');
})->name('complains.showcomplains');;

Route::get('/allstaffs', function () {
    return view('allstaffs');
})->name('allstaffs.viewstaffs');

Route::get('/seedoctor', function() {
    return view('seedoctor');
})->name('seedoctor.doctor');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//This is for Appointment 
Route::post('appointment', [AppointmentController::class, 'store'])->name('appointment.store');
//This is to view all doctors on the home page 
Route::get('/', [ShowController::class, 'show'])->name('welcome.show');
//This is to show all Complains on the dasboard (Appointmen)
Route::get('/complains', [ViewComplainsController::class, 'showcomplains'])->name('complains.showcomplains');
//This is to show all Staff on the dasboard 
Route::get('/allstaffs', [ViewStaffController::class, 'viewstaffs'])->name('allstaffs.viewstaffs');
//This is to make an appointment with a doctor (For The Viewing part of the doctor part)
Route::get('/seedoctor/{id}', [ViewStaffSpecifiController::class, 'show'])->name('seedoctor.show');
//This is the route to submit the doc app
Route::post('appointmentdoc', [AppointmentDocController::class, 'store'])->name('appointmentdoc.store');


//For athentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

require __DIR__.'/auth.php';
