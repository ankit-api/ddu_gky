<?php

namespace App\Http\Controllers;

use App\Models\DailyFailureItemsReport;
use Illuminate\Http\Request;

class DailyFailureItemsReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.daily_failure_items_report');
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
     * @param  \App\Models\DailyFailureItemsReport  $dailyFailureItemsReport
     * @return \Illuminate\Http\Response
     */
    public function show(DailyFailureItemsReport $dailyFailureItemsReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyFailureItemsReport  $dailyFailureItemsReport
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyFailureItemsReport $dailyFailureItemsReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailyFailureItemsReport  $dailyFailureItemsReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyFailureItemsReport $dailyFailureItemsReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyFailureItemsReport  $dailyFailureItemsReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyFailureItemsReport $dailyFailureItemsReport)
    {
        //
    }
}
