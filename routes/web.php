<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OnFieldRegistrationOfCandidateController;
use App\Http\Controllers\CandidateAdmissionController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CentreController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ItemsGivenToCandidateController;
use App\Http\Controllers\DailyFailureItemsReportController;
use App\Http\controllers\DeployedStaffTradeController;
use App\Http\Controllers\OjtPlanForBatchController;
use App\Http\Controllers\VerificationForOjtController;
use App\Http\Controllers\CandidateFeedbackFormController;
use App\Http\Controllers\CentreStatusOf15DayController;
use App\Http\Controllers\EvaluationAndAssessmentDetailsController;
use App\Http\Controllers\InspectionFormController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DailyDistributionOfTabletController;

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
    Route::get('/create-pia', [MasterController::class,'createPia'])->name('create-pia');
    Route::get('/create-project', [MasterController::class,'createProject'])->name('create-project');

    
    Route::get('/candidate-register', [OnFieldRegistrationOfCandidateController::class,'index'])->name('candidate-register');
    Route::get('/candidate-admission', [CandidateAdmissionController::class,'index'])->name('candidate-admission');
    Route::get('/create-batch', [BatchController::class,'index'])->name('create-batch');
    Route::get('/items_given', [ItemsGivenToCandidateController::class,'index'])->name('items_given');
    Route::get('/items_failure', [DailyFailureItemsReportController::class,'index'])->name('items_failure');
    Route::get('/deployed_staff_trade', [DeployedStaffTradeController::class,'index'])->name('deployed_staff_trade');
    Route::get('/ojt_plan_for_batch', [OjtPlanForBatchController::class,'index'])->name('ojt_plan_for_batch');
    Route::get('/verification_for_ojt', [VerificationForOjtController::class,'index'])->name('verification_for_ojt');
    Route::get('/candidate_feedback', [CandidateFeedbackFormController::class,'index'])->name('candidate_feedback');
    Route::get('/centre_status_of_15_days', [CentreStatusOf15DayController::class,'index'])->name('centre_status_of_15_days');
    Route::get('/evaluation_and_assessment_details', [EvaluationAndAssessmentDetailsController::class,'index'])->name('evaluation_and_assessment_details');
    Route::get('/inspection_form', [InspectionFormController::class,'index'])->name('inspection_form');
    Route::get('/daily_distribution_of_tablets', [DailyDistributionOfTabletController::class,'index'])->name('daily_distribution_of_tablets');

    Route::get('/create-centre', [CentreController::class,'index'])->name('create-centre');
    Route::get('/create-trainer', [StaffController::class,'index'])->name('create-trainer');
    

    Route::get('/create-certificate-distribution', [CertificateController::class,'createCertificateDistribution'])->name('create-certificate-distribution');
    
});
