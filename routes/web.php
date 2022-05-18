<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DoctorsEvaluationController;
use App\Http\Controllers\ClinicsEvaluationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorClinicsController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('index');


Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patients/login', [PatientController::class, 'login'])->name('patients.login.form');
Route::post('/patients/login', [PatientController::class, 'logar'])->name('patients.login');
Route::get('/patients/forget-password', [PatientController::class, 'request'])->name('patients.password.request');
Route::post('/patients/forget-password', [PatientController::class, 'email'])->name('patients.password.email');
Route::get('/patients/reset-password', [PatientController::class, 'reset'])->name('patients.password.reset');
Route::post('/patients/reset-password', [PatientController::class, 'passwordUpdate'])->name('patients.password.update');
    
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
Route::get('/doctors/login', [DoctorController::class, 'login'])->name('doctors.login.form');
Route::post('/doctors/login', [DoctorController::class, 'logar'])->name('doctors.login');
Route::get('/doctors/forget-password', [DoctorController::class, 'request'])->name('doctors.password.request');
Route::post('/doctors/forget-password', [DoctorController::class, 'email'])->name('doctors.password.email');
Route::get('/doctors/reset-password', [DoctorController::class, 'reset'])->name('doctors.password.reset');
Route::post('/doctors/reset-password', [DoctorController::class, 'passwordUpdate'])->name('doctors.password.update');

Route::get('/clinics/create', [ClinicController::class, 'create'])->name('clinics.create');
Route::post('/clinics', [ClinicController::class, 'store'])->name('clinics.store');
Route::get('/clinics/login', [ClinicController::class, 'login'])->name('clinics.login.form');
Route::post('/clinics/login', [ClinicController::class, 'logar'])->name('clinics.login');
Route::get('/clinics/forget-password', [ClinicController::class, 'request'])->name('clinics.password.request');
Route::post('/clinics/forget-password', [ClinicController::class, 'email'])->name('clinics.password.email');
Route::get('/clinics/reset-password', [ClinicController::class, 'reset'])->name('clinics.password.reset');
Route::post('/clinics/reset-password', [ClinicController::class, 'passwordUpdate'])->name('clinics.password.update');


Route::middleware(['auth:patient'])->group(function(){
    Route::get('/patients/{id}/edit', [PatientController::class, 'edit'])->name('patients.edit');
    Route::put('/patients/{id}',[PatientController::class, 'update'])->name('patients.update');
    Route::delete('/patients/{id}',[PatientController::class, 'destroy'])->name('patients.destroy');
    Route::post('/patients/logout', [PatientController::class, 'logout'])->name('patients.logout');

    Route::get('/doctorsEvaluations/create', [DoctorsEvaluationController::class, 'create'])->name('doctorsEvaluations.create');
    Route::post('/doctorsEvaluations', [DoctorsEvaluationController::class, 'store'])->name('doctorsEvaluations.store');
    Route::get('/doctorsEvaluations/{id}/edit', [DoctorsEvaluationController::class, 'edit'])->name('doctorsEvaluations.edit');
    Route::put('/doctorsEvaluations/{id}',[DoctorsEvaluationController::class, 'update'])->name('doctorsEvaluations.update');
    Route::delete('/doctorsEvaluations/{id}',[DoctorsEvaluationController::class, 'destroy'])->name('doctorsEvaluations.destroy');

    Route::get('/clinicsEvaluations/create', [ClinicsEvaluationController::class, 'create'])->name('clinicsEvaluations.create');
    Route::post('/clinicsEvaluations', [ClinicsEvaluationController::class, 'store'])->name('clinicsEvaluations.store');
    Route::get('/clinicsEvaluations/{id}/edit', [ClinicsEvaluationController::class, 'edit'])->name('clinicsEvaluations.edit');
    Route::put('/clinicsEvaluations/{id}',[ClinicsEvaluationController::class, 'update'])->name('clinicsEvaluations.update');
    Route::delete('/clinicsEvaluations/{id}',[ClinicsEvaluationController::class, 'destroy'])->name('clinicsEvaluations.destroy');

    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
});
 

Route::middleware(['auth:doctor'])->group(function(){
    Route::get('/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/doctors/{id}',[DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{id}',[DoctorController::class, 'destroy'])->name('doctors.destroy');
    Route::post('/doctors/logout', [DoctorController::class, 'logout'])->name('doctors.logout');
});


Route::middleware(['auth:clinic'])->group(function(){
    Route::get('/clinics/{id}/edit', [ClinicController::class, 'edit'])->name('clinics.edit');
    Route::put('/clinics/{id}',[ClinicController::class, 'update'])->name('clinics.update');
    Route::delete('/clinics/{id}',[ClinicController::class, 'destroy'])->name('clinics.destroy');
    Route::post('/clinics/logout', [ClinicController::class, 'logout'])->name('clinics.logout');
});


// Route::middleware(['auth:patient', 'auth:doctor', 'auth:clinic'])->group(function(){
    Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
    Route::get('/patients/{id}', [PatientController::class, 'show'])->name('patients.show');

    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/{id}', [DoctorController::class, 'show'])->name('doctors.show');

    Route::get('/clinics', [ClinicController::class, 'index'])->name('clinics.index');
    Route::get('/clinics/{id}', [ClinicController::class, 'show'])->name('clinics.show');

    Route::get('/doctorsEvaluations', [DoctorsEvaluationController::class, 'index'])->name('doctorsEvaluations.index');
    Route::get('/doctorsEvaluations/{id}', [DoctorsEvaluationController::class, 'show'])->name('doctorsEvaluations.show');

    Route::get('/clinicsEvaluations', [ClinicsEvaluationController::class, 'index'])->name('clinicsEvaluations.index');
    Route::get('/clinicsEvaluations/{id}', [ClinicsEvaluationController::class, 'show'])->name('clinicsEvaluations.show');
// });


// Route::middleware(['auth:doctor', 'auth:clinic'])->group(function(){
    Route::get('/doctorsClinics/create', [DoctorClinicsController::class, 'create'])->name('doctorsClinics.create');
    Route::post('/doctorsClinics', [DoctorClinicsController::class, 'store'])->name('doctorsClinics.store');
    Route::delete('/doctorsClinics/{id}',[DoctorClinicsController::class, 'destroy'])->name('doctorsClinics.destroy');
// });


// Route::resource('patients', PatientController::class);
// Route::resource('doctors', DoctorController::class);
// Route::resource('clinics', ClinicController::class);
// Route::resource('doctorsEvaluations', DoctorsEvaluationController::class);
// Route::resource('clinicsEvaluations', ClinicsEvaluationController::class);
Route::resource('appointments', AppointmentController::class);
// Route::resource('doctorsClinics', DoctorClinicsController::class);