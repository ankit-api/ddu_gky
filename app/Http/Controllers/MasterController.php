<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CreatePIA;
use App\Models\QTeamMembersDetail;
use App\Models\Project;
use App\Models\CenterDetails;
use App\Models\CenterIncharge;
use App\Models\State;
use App\Models\District;

class MasterController extends Controller
{
   
    public function piaForm()
    {
        return view('public.pia.create_pia');
    }
    public function createPia(Request $req)
    {
        // dd($req->all());
        $this->validate($req, [
            'name' => 'required|min:3|max:50',
            'contact_no' => 'required|max:10',
            'landline_no' => 'required|max:15',
            'official_email' => 'required',
            'address' => 'required|min:10|max:255'

        ]);

        $Pia = new CreatePIA();
        $Pia->pia_name = $req->name;
        $Pia->landline_no = $req->landline_no;
        $Pia->phone_no = $req->contact_no;
        $Pia->email = $req->official_email;
        $Pia->address = $req->address;
        $Pia->save();

        return redirect()->back()->with('alert_status','PIA Added Successfully');

    }

    public function projectForm()
    {
        $get_project = CreatePIA::all();
        $get_state = State::all();
        $get_district = District::all();
        // dd($get_project);
        return view('admin.create_project.create_project', compact("get_project", "get_state", "get_district"));
    }

    public function createProject(Request $req)
    {
        session(['pia_id' => '1']);
        $this->validate($req, [
            'pia_name' => 'required',
            'proj_name' => 'required|max:100',
            'state_id' => 'required',
            'district_id' => 'required'
        ]);

        $get_pia_id = $req->session()->get('pia_id');
        $added_by = $req->session()->get('pia_id');

        $Project = new Project();
        $Project->pia_id = $get_pia_id;
        $Project->name = $req->proj_name;
        $Project->duration = $req->proj_duration;
        $Project->state_id = $req->state_id;
        $Project->district_id = $req->district_id;
        $Project->description = $req->proj_description;
        $Project->added_by = $added_by;
        $Project->save();

        return redirect()->back()->with('alert_status','Project Added Successfully');
    }

    public function createQteamMember(Request $req)
    {
        session(['pia_id' => '1']);
        $this->validate($req, [
            'name' => 'required|min:3|max:50',
            'gender' => 'required',
            'contact' => 'required|max:10',
            'desig' => 'required',
            'email' => 'required|email',
            'address' => 'required|min:10|max:255',
            'reporting_off' => 'required|max:150'
        ]);

        $get_pia_id = $req->session()->get('pia_id');
        $added_by = $req->session()->get('pia_id');

        $QTeam = new QTeamMembersDetail();
        $QTeam->pia_id = $get_pia_id;
        $QTeam->name = $req->name;
        $QTeam->gender = $req->gender;
        $QTeam->contact = $req->contact;
        $QTeam->designation = $req->desig;
        $QTeam->email = $req->email;
        $QTeam->reporting_office = $req->reporting_off;
        $QTeam->address = $req->address;
        $QTeam->added_by = $added_by;
        $QTeam->save();

        return redirect()->back()->with('alert_status','Q Team Member Added Successfully');
    }

    public function qteamMemberForm()
    {
        return view('public.q team member.add_qteam_member');
    }

    public function centreInchargeForm()
    {
        $get_centre = CenterDetails::all();
        return view('public.centre incharge.add_centre_incharge', compact("get_centre"));
    }

    public function createCentreIncharge(Request $req)
    {
        $this->validate($req, [
            'centre_id' => 'required',
            'name' => 'required|max:40',
            'gender' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required|min:10|max:255',
            'qualification' => 'required|max:120'
        ]);

        // $total_rows = CenterIncharge::orderBy('id', 'desc')->count();
        
        // $cntr_inch_code = "CNTRIN/";
        // if($total_rows==0){
        //     $cntr_inch_code .= '0001';
        // }else{
        //     $last_id = CenterIncharge::orderBy('id', 'desc')->first()->id;
        //     $cntr_inch_code .= sprintf("%'04d",$last_id + 1);
        // }

        $Cen_Inch = new CenterIncharge();
        $Cen_Inch->centre_id = $req->centre_id;
        $Cen_Inch->name = $req->name;
        $Cen_Inch->email = $req->email;
        $Cen_Inch->contact = $req->contact_no;
        $Cen_Inch->address = $req->address;
        $Cen_Inch->gender = $req->gender;
        $Cen_Inch->qualification = $req->qualification;
        $Cen_Inch->added_by = $req->added_by;
        $Cen_Inch->save();

        return redirect()->back()->with('alert_status','Centre Incharge Added Successfully');
    }


}