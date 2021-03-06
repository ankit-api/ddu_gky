<?php

namespace App\Http\Controllers;

use App\Models\EvaluationAndAssessmentDetails;
use Illuminate\Http\Request;

class EvaluationAndAssessmentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.evaluation_and_assessment_details');
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
     * @param  \App\Models\EvaluationAndAssessmentDetails  $evaluationAndAssessmentDetails
     * @return \Illuminate\Http\Response
     */
    public function show(EvaluationAndAssessmentDetails $evaluationAndAssessmentDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EvaluationAndAssessmentDetails  $evaluationAndAssessmentDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(EvaluationAndAssessmentDetails $evaluationAndAssessmentDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvaluationAndAssessmentDetails  $evaluationAndAssessmentDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EvaluationAndAssessmentDetails $evaluationAndAssessmentDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvaluationAndAssessmentDetails  $evaluationAndAssessmentDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(EvaluationAndAssessmentDetails $evaluationAndAssessmentDetails)
    {
        //
    }
}
