<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\State;
use App\Models\District;
use App\Models\OnFieldRegistrationOfCandidate;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admissionForm()
    {
        $batch = Batch::all();    
        $state = State::all();
        $district = District::all();
        $reg_can = OnFieldRegistrationOfCandidate::all();
        return view('admin.candidate_admission.candidate_admission_form', compact("batch",'state','reg_can'));
    }

    public function postAdmission(Request $req)
    {
    }

}