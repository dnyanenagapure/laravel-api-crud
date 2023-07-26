<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Website;
use App\Http\Controllers\RegistrationController;


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

Route::get('/', [Website::class,'index'])->name('index');
Route::post('/getState', [Website::class,'getState']);
Route::post('/getCity', [Website::class,'getCity']);
Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('registration.form');
// Route::post('/getState', [RegistrationController::class, 'getStates']);
// Route::post('/getCity', [RegistrationController::class, 'getCities']);
Route::post('/submitForm', [RegistrationController::class, 'submitForm'])->name('registration.submit');

Route::get('/users', [RegistrationController::class,'users']);
Route::get('/update/{id}', [RegistrationController::class,'updatedata']);
Route::post('/update/{id}', [RegistrationController::class,'updateuser'])->name('registration.update');
Route::get('/delete/{id}', [RegistrationController::class,'deletedata']);
