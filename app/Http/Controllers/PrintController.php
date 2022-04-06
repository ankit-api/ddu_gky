<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnFieldRegistrationOfCandidate;

class PrintController extends Controller
{
    public function printParentConsent(Request $req){
        $cand_data = OnFieldRegistrationOfCandidate::where('id',$req->id)->first();
        // dd($cand_data);
        return view('print_layout.parent_consent_form_print',compact("cand_data"));
    }
}
