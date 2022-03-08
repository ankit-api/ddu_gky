<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnFieldRegistrationOfCandidateController;
use App\Http\Controllers\CandidateAdmissionController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\StaffController;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/form1', function () {
        return view('forms.on_field_reg_of_candidate');
    });
    Route::get('/create-centre', [CentreController::class,'index'])->name('create-centre');
    Route::get('/create-staff', [StaffController::class,'index'])->name('create-staff');
    Route::get('/create-batch', [BatchController::class,'index'])->name('create-batch');
    Route::get('/candidate-register', [OnFieldRegistrationOfCandidateController::class,'index'])->name('candidate-register');
    Route::get('/candidate-admission', [CandidateAdmissionController::class,'index'])->name('candidate-admission');
    
});
