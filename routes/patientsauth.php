<?php
use App\Http\Controllers\Patient\PatientAuthController;

Route::get('patients/auth/patientlogin', [PatientAuthController::class, 'showLoginForm'])->name('patientlogin');
Route::post('patients/auth/patientlogin', [PatientAuthController::class, 'login']);
Route::post('patients/logout', [PatientAuthController::class, 'logout'])->name('patient.logout');


Route::get('/patients/patienthome', [PatientAuthController::class, 'dashboard'])->middleware('auth')->name('patienthome');
