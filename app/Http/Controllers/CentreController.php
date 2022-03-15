<?php

namespace App\Http\Controllers;

use App\Models\CreatePIA;
use App\Models\State;
use App\Models\City;
use App\Models\CenterDetails;

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
        $get_project = CreatePIA::all();
        $get_state = State::all();
        $get_city = City::all();
        return view('admin.create_centre.create_centre', compact("get_project","get_state","get_city"));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createCentre(Request $req)
    {
        session(['pia_id' => '1']);
        $this->validate($req, [
            'pia_id' => 'required',
            'name_of_centre' => 'required|max:100',
            'state_id' => 'required',
            'address' => 'required'
        ]);

        $total_rows = CenterDetails::orderBy('id', 'desc')->count();
        
        $cntr_code = "CNTR/";
        if($total_rows==0){
            $cntr_code .= '0001';
        }else{
            $last_id = CenterDetails::orderBy('id', 'desc')->first()->id;
            $cntr_code .= sprintf("%'04d",$last_id + 1);
        }

        $get_pia_id = $req->session()->get('pia_id');

        $center = new CenterDetails();
        $center->pia_id = $get_pia_id;
        $center->center_code = $cntr_code;
        $center->state = $req->state_id;
        $center->city = $req->city_id;
        $center->centre_name = $req->name_of_centre;
        $center->address = $req->address;
        $center->save();

        return redirect()->back()->with('alert_status','Centre Added Successfully');
    }
}