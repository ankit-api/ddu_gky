<?php

namespace App\Http\Controllers;

use App\Models\DailyDistributionOfTablet;
use Illuminate\Http\Request;

class DailyDistributionOfTabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.daily_distribution_of_tablets');
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
     * @param  \App\Models\DailyDistributionOfTablet  $dailyDistributionOfTablet
     * @return \Illuminate\Http\Response
     */
    public function show(DailyDistributionOfTablet $dailyDistributionOfTablet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyDistributionOfTablet  $dailyDistributionOfTablet
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyDistributionOfTablet $dailyDistributionOfTablet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailyDistributionOfTablet  $dailyDistributionOfTablet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyDistributionOfTablet $dailyDistributionOfTablet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyDistributionOfTablet  $dailyDistributionOfTablet
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyDistributionOfTablet $dailyDistributionOfTablet)
    {
        //
    }
}
