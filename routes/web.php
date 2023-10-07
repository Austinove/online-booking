<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\ResidenceController;

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
});
Route::get('/instructions', function () {
    return view('instructions');
})->name('instructions');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/form', [PersonalInfoController::class, "index"])->name('forms');
Route::post('/personal_info', [PersonalInfoController::class, "store"])->name('personal_info');
Route::post('/residence', [ResidenceController::class, "store"])->name('residence');
Route::post('/return_step1/{id}', [ResidenceController::class, "return_step_one"])->name('return_step1');
Route::get('/resume', function () {
    return view('resume');
})->name('resume');
Route::get('/status', function () {
    return view('status');
})->name('status');
Route::get('/new-appointments', function () {
    return view('backend.new_appointments');
})->name('new_appointments');
Route::get('/appointments', function () {
    return view('backend.appointments');
})->name('appointments');
Route::get('/pending-appointments', function () {
    return view('backend.pending_appointments');
})->name('pending_appointments');

Route::get('/unattended-appointments', function () {
    return view('backend.unattended_appointments');
})->name('unattended_appointments');

Route::get('/application/{id}', function () {
    return view('backend.application_details');
})->name('applicant');

Route::get('/profile', function () {
    return view('backend.profile');
})->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
