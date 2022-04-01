<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MIS;
use Auth;

class ProfileController extends Controller
{
    public function profileForm()
    {
        $mis_data = MIS::where('mis_code', Auth::user()->user_code)->first();
        return view('admin.profile.mis_head_profile', compact("mis_data"));
    }
    public function postProfileForm(Request $req)
    {
        $this->validate($req, [
           
        ]);
    }
}
