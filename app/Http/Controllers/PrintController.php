<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnFieldRegistrationOfCandidate;
use App\Models\MIS;
use App\Models\Project;
use App\Models\PIA;
use Auth;

class PrintController extends Controller
{
    public function printParentConsent(Request $req){
        $cand_data = OnFieldRegistrationOfCandidate::where('id',$req->id)->first();
        $proj_id = MIS::where('mis_code',Auth::user()->user_code)->get('project_id')->first();
        $pia_id = Project::where('id',$proj_id->project_id)->get('pia_id')->first();
        $pia_details = PIA::where('id',$pia_id->pia_id)->get(['pia_name','landline_no'])->first();
        return view('print_layout.parent_consent_form_print',compact("cand_data","pia_details"));
    }
}
