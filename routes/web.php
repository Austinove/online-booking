<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\ResidenceController;
use App\Http\Controllers\SpouseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\MotherController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\OfficialInfoController;
use App\Http\Controllers\HomeController;

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



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/logout_user',function(){
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout_user');
Route::get('/instructions', function () {
    return view('instructions');
})->name('instructions');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//personal details routes
Route::get('/form', [PersonalInfoController::class, "index"])->name('forms');
Route::get('/second_form/{token}/{id}', [PersonalInfoController::class, "second_form"])->name('second_form');
Route::post('/personal_info', [PersonalInfoController::class, "store"])->name('personal_info');
Route::get('/return_step1/{token}/{id}', [PersonalInfoController::class, "form1_edit"])->name('return_step1');
Route::get('/return_step2/{token}/{id}', [PersonalInfoController::class, "form2_edit"])->name('return_step2');
Route::post('/resume_status', [PersonalInfoController::class, "resume_status"])->name('resume_status');

//residence routes
Route::post('/residence', [ResidenceController::class, "store"])->name('residence');
Route::get('/third_form/{token}/{id}', [ResidenceController::class, "third_form"])->name('third_form');

//spause routes
Route::post('/spouse', [SpouseController::class, "store"])->name('spouse');
Route::get('/fourth_form/{token}/{id}', [SpouseController::class, "fourth_form"])->name('fourth_form');

//father routes
Route::post('/father', [FatherController::class, "store"])->name('father');
Route::get('/fifth_form/{token}/{id}', [FatherController::class, "fifth_form"])->name('fifth_form');

//mother routes
Route::post('/mother', [MotherController::class, "store"])->name('mother');
Route::get('/sixth_form/{token}/{id}', [MotherController::class, "sixth_form"])->name('sixth_form');

//guardian routes
Route::post('/guardian', [GuardianController::class, "store"])->name('guardian');
Route::get('/seventh_form/{token}/{id}', [GuardianController::class, "seventh_form"])->name('seventh_form');

//confirmation routes
Route::post('/confirm', [GuardianController::class, "confirm"])->name('confirm');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');
Route::get('/status', function () {
    return view('status');
})->name('status');


//backend routes
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('bar_chart', [HomeController::class, "bar_graph"])->name('bar_chart');
    Route::get('apex_chart', [HomeController::class, "apex_chart"])->name('apex_chart');
    Route::get('appointments_data', [HomeController::class, "appointments_data"])->name('appointments_data');
    Route::get('adults_children', [HomeController::class, "adults_children"])->name('adults_children');
    Route::get('/appointments', [OfficialInfoController::class, "appointments"])->name('appointments');
    Route::get('/new-appointments', function () {
        return view('backend.new_appointments')->with("set_appointments");
    })->name('new_appointments');
    
    Route::get('/pending_appointments', [OfficialInfoController::class, "pending_appointments"])->name('pending_appointments');
    Route::get('/application/{id}', [OfficialInfoController::class, "applicant"])->name('applicant');
    Route::post('/appointment_date', [OfficialInfoController::class, "appointment_date"])->name('appointment_date');
    Route::post('/request_changes', [OfficialInfoController::class, "request_changes"])->name('request_changes');
    Route::post('/finished_appointment', [OfficialInfoController::class, "finished_appointment"])->name('finished_appointment');

    Route::get('/profile', function () {
        return view('backend.profile');
    })->name('profile');
    Route::post('/edit_profile', [OfficialInfoController::class, "edit_profile"])->name('edit_profile');
});
