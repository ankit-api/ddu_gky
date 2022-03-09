<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\OnFieldRegistrationOfCandidateController;
use App\Http\Controllers\CandidateAdmissionController;
use App\Http\Controllers\BatchController;

=======
<<<<<<< Updated upstream

=======
use App\Http\Controllers\OnFieldRegistrationOfCandidateController;
use App\Http\Controllers\CandidateAdmissionController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\ItemsGivenToCandidateController;
use App\Http\Controllers\DailyFailureItemsReportController;
use App\Http\controllers\DeployedStaffTradeController;
/*
>>>>>>> Stashed changes
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
    Route::get('/candidate-register', [OnFieldRegistrationOfCandidateController::class,'index'])->name('candidate-register');
    Route::get('/candidate-admission', [CandidateAdmissionController::class,'index'])->name('candidate-admission');
    Route::get('/create-batch', [BatchController::class,'index'])->name('create-batch');

=======
<<<<<<< Updated upstream

=======
    Route::get('/candidate-register', [OnFieldRegistrationOfCandidateController::class,'index'])->name('candidate-register');
    Route::get('/candidate-admission', [CandidateAdmissionController::class,'index'])->name('candidate-admission');
    Route::get('/create-batch', [BatchController::class,'index'])->name('create-batch');
    Route::get('/items_given', [ItemsGivenToCandidateController::class,'index'])->name('items_given');
    Route::get('/items_failure', [DailyFailureItemsReportController::class,'index'])->name('items_failure');
    Route::get('/deployed_staff_trade', [DeployedStaffTradeController::class,'index'])->name('deployed_staff_trade');
>>>>>>> Stashed changes
>>>>>>> Stashed changes
});
