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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnFieldRegistrationOfCandidate  $onFieldRegistrationOfCandidate
     * @return \Illuminate\Http\Response
     */
    public function show(OnFieldRegistrationOfCandidate $onFieldRegistrationOfCandidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnFieldRegistrationOfCandidate  $onFieldRegistrationOfCandidate
     * @return \Illuminate\Http\Response
     */
    public function edit(OnFieldRegistrationOfCandidate $onFieldRegistrationOfCandidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnFieldRegistrationOfCandidate  $onFieldRegistrationOfCandidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnFieldRegistrationOfCandidate $onFieldRegistrationOfCandidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnFieldRegistrationOfCandidate  $onFieldRegistrationOfCandidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnFieldRegistrationOfCandidate $onFieldRegistrationOfCandidate)
    {
        //
    }
}
