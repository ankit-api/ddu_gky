<?php

namespace App\Http\Controllers;

use App\Models\OnFieldRegistrationOfCandidate;
use Illuminate\Http\Request;

class OnFieldRegistrationOfCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.on_field_reg_of_candidate');
    }
    public function postRegistration(Request $req)
    {
        // $req->validate([
        //     'w_title' => 'required|max:100',
        //     'w_desc' => 'required',
        //     'w_img' => 'required|mimes:png,jpg,jpeg,svg|max:2048',
        //     'w_start' => 'required',
        //     'w_end' => 'required',
        // ]);
        dd($req);
    }

   
}
