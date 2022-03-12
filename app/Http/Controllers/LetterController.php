<?php

namespace App\Http\Controllers;

use App\Models\LetterFromSrlmMobiPlan;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function print_srlm_to_cert(){
        return view('print_layout.certificate_to_srlm_print');
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
     * @param  \App\Models\LetterFromSrlmMobiPlan  $letterFromSrlmMobiPlan
     * @return \Illuminate\Http\Response
     */
    public function show(LetterFromSrlmMobiPlan $letterFromSrlmMobiPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LetterFromSrlmMobiPlan  $letterFromSrlmMobiPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(LetterFromSrlmMobiPlan $letterFromSrlmMobiPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LetterFromSrlmMobiPlan  $letterFromSrlmMobiPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LetterFromSrlmMobiPlan $letterFromSrlmMobiPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LetterFromSrlmMobiPlan  $letterFromSrlmMobiPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LetterFromSrlmMobiPlan $letterFromSrlmMobiPlan)
    {
        //
    }
}
