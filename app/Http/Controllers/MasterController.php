<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MasterController extends Controller
{
   
    public function createPia()
    {
        return view('forms.create_pia');
    }

    public function createProject()
    {
        return view('forms.create_project');
    }


}