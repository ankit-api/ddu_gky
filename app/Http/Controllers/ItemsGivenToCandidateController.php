<?php

namespace App\Http\Controllers;

use App\Models\ItemsGivenToCandidate;
use Illuminate\Http\Request;

class ItemsGivenToCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.items_given_to_candidate');
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
     * @param  \App\Models\ItemsGivenToCandidate  $itemsGivenToCandidate
     * @return \Illuminate\Http\Response
     */
    public function show(ItemsGivenToCandidate $itemsGivenToCandidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemsGivenToCandidate  $itemsGivenToCandidate
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemsGivenToCandidate $itemsGivenToCandidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItemsGivenToCandidate  $itemsGivenToCandidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemsGivenToCandidate $itemsGivenToCandidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemsGivenToCandidate  $itemsGivenToCandidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemsGivenToCandidate $itemsGivenToCandidate)
    {
        //
    }
}
