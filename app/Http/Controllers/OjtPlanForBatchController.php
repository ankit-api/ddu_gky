<?php

namespace App\Http\Controllers;

use App\Models\OjtPlanForBatch;
use Illuminate\Http\Request;

class OjtPlanForBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.ojt_plan_for_batch');
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
     * @param  \App\Models\OjtPlanForBatch  $ojtPlanForBatch
     * @return \Illuminate\Http\Response
     */
    public function show(OjtPlanForBatch $ojtPlanForBatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OjtPlanForBatch  $ojtPlanForBatch
     * @return \Illuminate\Http\Response
     */
    public function edit(OjtPlanForBatch $ojtPlanForBatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OjtPlanForBatch  $ojtPlanForBatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OjtPlanForBatch $ojtPlanForBatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OjtPlanForBatch  $ojtPlanForBatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(OjtPlanForBatch $ojtPlanForBatch)
    {
        //
    }
}
