<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.create_centre');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateBatch(Request $request)
    {
        $request->validate([
            'c_title' => 'required|max:40',
            'c_desc' => 'required|max:200',
            'c_price' => 'required',
            'c_logo' => 'required|mimes:png,jpg,jpeg,svg|max:3072'
        ]);
    }
}