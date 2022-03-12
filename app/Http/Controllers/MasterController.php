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

    public function createQteamMember()
    {
        return view('forms.add_qteam_member');
    }

    public function createCentreIncharge()
    {
        return view('forms.add_centre_incharge');
    }


}