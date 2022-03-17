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
use App\Http\Controllers\LetterController;

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

Route::view('/letter-to-srlm', 'forms/letter_to_srlm')->name('letter-to-srlm');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function() {

    Route::get('/form1', function () {
        return view('forms.on_field_reg_of_candidate');
    });
    Route::get('/pia_form', [MasterController::class,'piaForm'])->name('pia_form');
    Route::post('/create_pia', [MasterController::class,'createPia'])->name('create_pia');

    Route::get('/project_form', [MasterController::class,'projectForm'])->name('project_form');
    Route::post('/create_project', [MasterController::class,'createProject'])->name('create_project');

    Route::get('/q_team_member_form', [MasterController::class,'qteamMemberForm'])->name('q_team_member_form');
    Route::post('/create_qteam_member', [MasterController::class,'createQteamMember'])->name('create_qteam_member');

    Route::get('/centre_incharge_form', [MasterController::class,'centreInchargeForm'])->name('centre_incharge_form');
    Route::post('/create_centre_incharge', [MasterController::class,'createCentreIncharge'])->name('create_centre_incharge');
    
    Route::get('/mobilizer_form', [MasterController::class,'mobilizerForm'])->name('mobilizer_form');
    Route::post('/create_mobilizer_form', [MasterController::class,'createMobilizer'])->name('create_mobilizer_form');

    Route::get('/candidate-register', [OnFieldRegistrationOfCandidateController::class,'index'])->name('candidate-register');
    Route::post('/post-candidate-register', [OnFieldRegistrationOfCandidateController::class,'postRegistration'])->name('post-candidate-register');
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

    Route::get('/centre_form', [CentreController::class,'index'])->name('centre_form');
    Route::post('/create_centre', [CentreController::class,'createCentre'])->name('create_centre');
    
    Route::get('/create-trainer', [StaffController::class,'index'])->name('create-trainer');
    

    Route::get('/create-certificate-distribution', [CertificateController::class,'createCertificateDistribution'])->name('create-certificate-distribution');

    //Print
    Route::view('/registration-print', 'print_layout/on_field_reg_of_candidate_print');
    Route::view('/addmission-print', 'print_layout/candidate_admission_form_print');
    //Print-Layout Forms
    Route::get('/print_srlm_to_cert', [LetterController::class,'print_srlm_to_cert'])->name('print_srlm_to_cert');
    Route::get('/print_srlm_from_cert', [LetterController::class,'print_srlm_from_cert'])->name('print_srlm_from_cert');
    
});
