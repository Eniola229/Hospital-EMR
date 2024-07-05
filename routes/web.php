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
use App\Http\Controllers\Hospital\ViewSingleComplainController; 
use App\Http\Controllers\Hospital\AddPatientController; 
use App\Http\Controllers\Hospital\ShowToAddPatientController; 
use App\Http\Controllers\Hospital\ShowPatientController; 
use App\Http\Controllers\Hospital\ViewSinglePatientController; 
use App\Http\Controllers\Hospital\ViewEcounterNote; 
use App\Http\Controllers\Hospital\ShowPatientSpecificEcounter;  
use App\Http\Controllers\Hospital\ViewForAccount; 
// use App\Http\Controllers\Hospital\ShowSpecificEounterNote; 
use App\Http\Controllers\Hospital\AddToEconterController; 
use App\Http\Controllers\Hospital\ViewStaffMessageController; 
use App\Http\Controllers\Messages\ViewStaffMsgInfoController; 
use App\Http\Controllers\Pharmacy\ViewPateintPharController; 
use App\Http\Controllers\Pharmacy\ViewSinglePatentRecordsController; 
use App\Http\Controllers\Pharmacy\AddPharmacyController; 
use App\Http\Controllers\Pharmacy\ReferToADoctorController; 


//For Staff
use App\Http\Controllers\Staff\ViewGeneralNotificationOrMsgController; 

//For Messages
use App\Http\Controllers\Messages\MessageController; 

 


//This is the route for all page
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/patientlogin', function () {
    return view('patientlogin');
})->name('patientlogin');

Route::get('/complains', function () {
    return view('complains'); 
})->name('complains.showcomplains');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/allstaffs', function () {
    return view('allstaffs');
})->name('allstaffs.viewstaffs');

Route::get('/seedoctor', function() {
    return view('seedoctor');
})->name('seedoctor.doctor');

Route::get('/viewsinglecomplain', function() {
    return view('viewsinglecomplain');
})->middleware(['auth', 'verified'])->name('viewsinglecomplain.complain');

Route::get('/addtopatientrecord', function () {
    return view('addtopatientrecord');
})->middleware(['auth', 'verified'])->name('addtopatientrecord.add');

Route::get('/patients', function () {
    return view('patients');
})->middleware(['auth', 'verified'])->name('patients.add');

Route::get('/viewsinglepatient', function () {
    return view('viewsinglepatient');
})->middleware(['auth', 'verified'])->name('viewsinglepatient.patients');

Route::get('/econter', function () {
    return view('econter');
})->middleware(['auth', 'verified'])->name('econter.econterpatients');

Route::get('/viewsingleeconterpatient', function () {
    return view('viewsingleeconterpatient');
})->middleware(['auth', 'verified'])->name('viewsingleeconterpatient.viewsingleeconter');

Route::get('/account', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('account.accounting');

Route::get('/payment', function () {
    return view('payment');
})->middleware(['auth', 'verified'])->name('payment.makepayment');

Route::get('/message', function () {
    return view('message');
})->middleware(['auth', 'verified'])->name('message.messagestaff');

Route::get('/messagestaff', function() {
    return view('messagestaff');
})->middleware(['auth', 'verified'])->name('messagestaff.message');

Route::get('/pharmacy', function() {
    return view('pharmacy');
})->middleware(['auth', 'verified'])->name('pharmacy.records');

Route::get('/viewsingleforpharmacy', function() {
    return view('viewsingleforpharmacy');
})->middleware(['auth', 'verified'])->name('viewsingleforpharmacy.singlerecords');

Route::get('/patientpahrrecord', function() {
    return view('patientpahrrecord');
})->middleware(['auth', 'verified'])->name('patientpahrrecord.pharmacyrecord');


// Route::get('/showecounterspecial', function () {
//     return view('showecounterspecial');
// })->middleware(['auth', 'verified'])->name('showecounterspecial.viewsingleeconteralone');

 



//This is for Appointment 
Route::post('appointment', [AppointmentController::class, 'store'])->name('appointment.store');
//This is the route to submit the Appointment for Specific Doctor
Route::post('appointmentdoc', [AppointmentDocController::class, 'store'])->name('appointmentdoc.store');
//This is to view all doctors on the home page 
Route::get('/', [ShowController::class, 'show'])->name('welcome.show');
//This is to show all Staff on the dasboard 
Route::get('/allstaffs', [ViewStaffController::class, 'viewstaffs'])->name('allstaffs.viewstaffs');
//This is to make an appointment with a doctor (For The Viewing part of the doctor part)
Route::get('/seedoctor/{id}', [ViewStaffSpecifiController::class, 'show'])->name('seedoctor.show');





//For athentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('/viewsinglecomplain/{id}', [ViewSingleComplainController::class, 'show'])->name('viewsinglecomplain.show');
    //This is to show all Complains on the dasboard (Appointment)
    Route::get('/complains', [ViewComplainsController::class, 'showcomplains'])->name('complains.showcomplains');
    //This is to add patient and send the message 
    Route::post('addpatient', [AddPatientController::class, 'store'])->name('addpatient.store');
    //Conect to the addtopatient record. thelps to display data 
    Route::get('/addtopatientrecord/{id}', [ShowToAddPatientController::class, 'show'])->name('addtopatientrecord.show');
    //This is to show all patients 
    Route::get('/patients', [ShowPatientController::class, 'showpatients'])->name('patients.showpatients');
     //This is to show all patients  for account
    Route::get('/account', [ViewForAccount::class, 'showpatientsaccount'])->name('account.showpatientsaccount');
    Route::get('/econter', [ViewEcounterNote::class, 'showeconter'])->name('econter.showeconter');
    //This is to show a single patient 
    Route::get('/viewsinglepatient/{id}', [ViewSinglePatientController::class, 'show'])->name('viewsinglepatient.show');
    //This is to show a single patient for Ecounter
    Route::get('/viewsingleeconterpatient/{id}', [ShowPatientSpecificEcounter::class, 'show'])->name('viewsingleeconterpatient.show');

    //This is to add ecounter note
    Route::post('addecounter', [AddToEconterController::class, 'store'])->name('addecounter.store');
    //This is to view all staffs for the message 
    Route::get('/message', [ViewStaffMessageController::class, 'viewstaffsmsg'])->name('message.viewstaffsmsg');


    //This is to view a particular staff info in message staff page 
    Route::get('/messagestaff/{id}', [ViewStaffMsgInfoController::class, 'show'])->name('messagestaff.viewstaffsmsg');
    Route::get('/message', [ViewStaffMessageController::class, 'viewstaffsmsg'])->name('message.viewstaffsmsg');
    //This is to view all patints on pharmacy page 
    Route::get('/pharmacy', [ViewPateintPharController::class, 'show'])->name('pharmacy.records');
    //This is to view patints pharmacy record 
    Route::get('/patientpahrrecord/{id}', [ViewSinglePatentRecordsController::class, 'show'])->name('patientpahrrecord.show');
    //This is to add new pharmcy record to patints pharmacy record 
    Route::post('/patientpahrrecord', [AddPharmacyController::class, 'store'])->name('patientpahrrecord.store');

    //This is for refer a doctor 
    Route::post('/viewsingleeconterpatient', [ReferToADoctorController::class, 'store'])->name('viewsingleeconterpatient.store');
    Route::get('/dashboard', [ViewGeneralNotificationOrMsgController::class, 'show'])->name('dashboard.show');
    //This is for refer a doctor staff
    Route::post('/messagestaff', [MessageController::class, 'store'])->name('messagestaff.store');
    


 


    // //This is to show a single Ecounter for Patient
    // Route::get('/showecounterspecial/{patient_id}', [ShowSpecificEounterNote::class, 'showecounter'])->name('showecounterspecial.show');
});

require __DIR__.'/auth.php';