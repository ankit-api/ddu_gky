<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PIA;
use App\Models\QTeamMembersDetail;
use App\Models\Project;
use App\Models\CentreDetails;
use App\Models\CenterIncharge;
use App\Models\State;
use App\Models\District;
use App\Models\Mobilizer;
use App\Models\User;
use Mail;
use Auth;

class MasterController extends Controller
{
   
    public function piaForm()
    {
        return view('public.pia.create_pia');
    }
    public function createPia(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|min:3|max:50',
            'contact_no' => 'required|max:10',
            'landline_no' => 'required|max:15',
            'official_email' => 'required',
            'address' => 'required|min:10|max:255'

        ]);

        // $total_rows = PIA::orderBy('id', 'desc')->count();
        
        // $pia_code = "PIA/";
        // if($total_rows==0){
        //     $pia_code .= '0001';
        // }else{
        //     $last_id = PIA::orderBy('id', 'desc')->first()->id;
        //     $pia_code .= sprintf("%'04d",$last_id + 1);
        // }

        $Pia = new PIA();
        $Pia->pia_code = $req->pia_code;
        $Pia->pia_name = $req->name;
        $Pia->landline_no = $req->landline_no;
        $Pia->phone_no = $req->contact_no;
        $Pia->email = $req->official_email;
        $Pia->address = $req->address;
        $Pia->added_by = Auth::user()->id;
        $Pia->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'PIA',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });


        $user = new User();
        $user->role_id = '2';
        $user->user_code = $pia_code;
        $user->name = $req->name;
        $user->email = $req->official_email;
        $user->password = $hashed_random_password;
        $user->save();
       
        return redirect()->back()->with('alert_status','PIA Added Successfully');

    }

    public function piaList()
    {
        $pia = PIA::all();
        return view('public.pia.pia_list', compact('pia'));
    }

    public function projectForm()
    {
        $get_pia = PIA::all();
        $get_state = State::all();
        $get_district = District::all();
        // dd($get_project);
        return view('admin.create_project.create_project', compact("get_pia", "get_state", "get_district"));
    }

    public function createProject(Request $req)
    {
        $this->validate($req, [
            'pia_name' => 'required',
            'proj_name' => 'required|max:100',
            'state_id' => 'required',
            'district_id' => 'required'
        ]);

        $get_pia_id = Auth::user()->id;

        $Project = new Project();
        $Project->pia_id = $get_pia_id;
        $Project->name = $req->proj_name;
        $Project->duration = $req->proj_duration;
        $Project->state = $req->state_id;
        $Project->district = $req->district_id;
        $Project->description = $req->proj_description;
        $Project->added_by = Auth::user()->id;
        $Project->save();

        return redirect()->back()->with('alert_status','Project Added Successfully');
    }

    public function projectList()
    {
        $project_data = Project::with('getProjectList','getState','getDistrict')->get();
        // dd($project_data);
        return view('admin.create_project.project_list', compact('project_data'));
    }

    public function centreForm()
    {
        $get_pia = PIA::all();
        
        $get_project = Project::all();
        $get_state = State::all();
        $get_district = District::all();
        $project_data = Project::with('getProjectList','getState')->get();
        return view('admin.create_centre.create_centre', compact("get_pia","project_data" , "get_state","get_district"));
    }

    public function createCentre(Request $req)
    {
        $this->validate($req, [
            'pia_id' => 'required',
            'name_of_centre' => 'required|max:100',
            'state_id' => 'required',
            'district_id' => 'required',
            'address' => 'required'
        ]);

        // $total_rows = CentreDetails::orderBy('id', 'desc')->count();
        
        // $cntr_code = "CNTR/";
        // if($total_rows==0){
        //     $cntr_code .= '0001';
        // }else{
        //     $last_id = CentreDetails::orderBy('id', 'desc')->first()->id;
        //     $cntr_code .= sprintf("%'04d",$last_id + 1);
        // }

        $get_pia_id = Auth::user()->id;

        $center = new CentreDetails();
        $center->project_id = $req->project_id;
        $center->pia_id = $get_pia_id;
        $center->centre_code = $req->cntr_code;
        $center->state = $req->state_id;
        $center->district = $req->district_id;
        $center->centre_name = $req->name_of_centre;
        $center->address = $req->address;
        $center->added_by = Auth::user()->id;
        $center->save();

        return redirect()->back()->with('alert_status','Centre Added Successfully');
    }

    public function centreList()
    {
        $centre_data = CentreDetails::with('getProjectName', 'getState','getDistrict')->get();
        // dd($centre_data);
        return view('admin.create_centre.centre_list', compact('centre_data'));
    }


    public function createQteamMember(Request $req)
    {
        $this->validate($req, [
            'name' => 'required|min:3|max:50',
            'gender' => 'required',
            'contact' => 'required|max:10',
            'desig' => 'required',
            'email' => 'required|email',
            'address' => 'required|min:10|max:255',
            'reporting_off' => 'required|max:150'
        ]);

        // $total_rows = QTeamMembersDetail::orderBy('id', 'desc')->count();
        
        // $q_code = "QTEAM/";
        // if($total_rows==0){
        //     $q_code .= '0001';
        // }else{
        //     $last_id = QTeamMembersDetail::orderBy('id', 'desc')->first()->id;
        //     $q_code .= sprintf("%'04d",$last_id + 1);
        // }

        $get_pia_id = Auth::user()->id;

        $QTeam = new QTeamMembersDetail();
        $QTeam->pia_id = $get_pia_id;
        $QTeam->qteam_member_code = $req->q_code;
        $QTeam->name = $req->name;
        $QTeam->gender = $req->gender;
        $QTeam->contact = $req->contact;
        $QTeam->designation = $req->desig;
        $QTeam->email = $req->email;
        $QTeam->reporting_office = $req->reporting_off;
        $QTeam->address = $req->address;
        $QTeam->added_by = Auth::user()->id;
        $QTeam->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'Q-Team Member',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });


        $user = new User();
        $user->role_id = '3';
        $user->user_code = $q_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->back()->with('alert_status','Q Team Member Added Successfully');
    }

    public function qteamMemberForm()
    {
        return view('public.q team member.add_qteam_member');
    }

    public function centreInchargeForm()
    {
        $get_centre = CentreDetails::all();
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
        
        // $ci_code = "CENINCH/";
        // if($total_rows==0){
        //     $ci_code .= '0001';
        // }else{
        //     $last_id = CenterIncharge::orderBy('id', 'desc')->first()->id;
        //     $ci_code .= sprintf("%'04d",$last_id + 1);
        // }

        $Cen_Inch = new CenterIncharge();
        $Cen_Inch->centre_id = $req->centre_id;
        $Cen_Inch->centre_incharge_code = $req->ci_code;
        $Cen_Inch->name = $req->name;
        $Cen_Inch->email = $req->email;
        $Cen_Inch->contact = $req->contact_no;
        $Cen_Inch->address = $req->address;
        $Cen_Inch->gender = $req->gender;
        $Cen_Inch->qualification = $req->qualification;
        $Cen_Inch->added_by = Auth::user()->id;
        $Cen_Inch->save();

        $random_password =  Str::random(8);        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'Centre Incharge',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });

        $user = new User();
        $user->role_id = '5';
        $user->user_code = $ci_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->back()->with('alert_status','Centre Incharge Added Successfully');
    }

    public function mobilizerForm()
    {
        $get_centre = CentreDetails::all();
        return view('public.mobilizer.add_mobilizer', compact("get_centre"));
    }

    public function createMobilizer(Request $req)
    {
        $this->validate($req, [
            'centre_id' => 'required',
            'name' => 'required|max:40',
            'gender' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required|min:10|max:255'
        ]);

        // $total_rows = Mobilizer::orderBy('id', 'desc')->count();
        
        // $mob_code = "MOB/";
        // if($total_rows==0){
        //     $mob_code .= '0001';
        // }else{
        //     $last_id = Mobilizer::orderBy('id', 'desc')->first()->id;
        //     $mob_code .= sprintf("%'04d",$last_id + 1);
        // }

        $Mobi = new Mobilizer();
        $Mobi->centre_id = $req->centre_id;
        $Mobi->mob_id = $req->mob_code;
        $Mobi->name = $req->name;
        $Mobi->email = $req->email;
        $Mobi->contact = $req->contact_no;
        $Mobi->address = $req->address;
        $Mobi->gender = $req->gender;
        $Mobi->added_by = Auth::user()->id;
        $Mobi->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'Mobilizer',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });


        $user = new User();
        $user->role_id = '4';
        $user->user_code = $mob_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->back()->with('alert_status','Mobilizer Added Successfully');
    }

}