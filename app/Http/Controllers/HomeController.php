<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role_id=='1'){
            return view('dashboard.admin_dashboard');
        }
        else if(Auth::user()->role_id=='2'){
            return view('dashboard.pia_dashboard');
        }
        else if(Auth::user()->role_id=='3'){
            return view('dashboard.qteam_dashboard');
        }
        else if(Auth::user()->role_id=='4'){
            return view('dashboard.mobilizer_dashboard');
        }
        else if(Auth::user()->role_id=='5'){
            return view('dashboard.centre_incharge_dashboard');
        }
        else if(Auth::user()->role_id=='6'){
            return view('dashboard.trainer_dashboard');
        }
        else if(Auth::user()->role_id=='7'){
            return view('dashboard.mis_head_dashboard');
        }
        else if(Auth::user()->role_id=='8'){
            return view('dashboard.mis_exe_dashboard');
        }
        
    }
}
