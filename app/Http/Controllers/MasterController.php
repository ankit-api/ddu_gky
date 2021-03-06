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
use App\Models\Scheme;
use App\Models\CategoryType;
use App\Models\Block;
use App\Models\Qualification;
use Image;
use Mail;
use Auth;
use Response;

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
            'address' => 'required|min:10|max:255',
            'pia_doc' => 'max:1024'
        ]);

        // $total_rows = PIA::orderBy('id', 'desc')->count();
        
        // $pia_code = "PIA/";
        // if($total_rows==0){
        //     $pia_code .= '0001';
        // }else{
        //     $last_id = PIA::orderBy('id', 'desc')->first()->id;
        //     $pia_code .= sprintf("%'04d",$last_id + 1);
        // }

        $user_check = User::where('user_code',$req->pia_code)->get();
        
        $pia_code = str_replace("/", "_", $req->pia_code);
        $file = $req->file('pia_doc');
        $filename = $pia_code.'.'.$file->getClientOriginalExtension();
      

        $Pia = new PIA();
        $Pia->pia_code = $req->pia_code;
        $Pia->pia_name = $req->name;
        $Pia->landline_no = $req->landline_no;
        $Pia->phone_no = $req->contact_no;
        $Pia->email = $req->official_email;
        $Pia->pia_doc = $filename;
        $Pia->address = $req->address;
        $Pia->added_by = Auth::user()->id;
        $Pia->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        // $data= 
        // [  
        //     'otp'=>$random_password,
        //     'user'=>'PIA',
        // ];       
        
        $data= 
        [  
            'username'=>$req->pia_code,
            'password'=>$random_password,
            'name'=>$req->name,
            'email'=>$req->official_email,
            'usertype'=>'PIA',
        ];    

        Mail::send('mail.sendmail', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Login Credentials');
        $message->from(env('MAIL_USERNAME'), 'PSSPL');
        });     

        $user = new User();
        $user->role_id = '2';
        $user->user_code = $req->pia_code;
        $user->name = $req->name;
        $user->email = $req->official_email;
        $user->password = $hashed_random_password;
        $user->save();

        $path = public_path('Documents/PIA_File');
        $file->move($path,$filename);       
        return redirect()->route('pia_list')->with('alert_success','PIA Added Successfully');
        
    }

    public function piaList()
    {
        $pia = PIA::where('status', 'active')->orderByDesc("id")->get();
        return view('public.pia.pia_list', compact('pia'));
    }

    public function projectForm()
    {
        $pia = User::where('user_code',Auth::user()->user_code)->with('getPia')->get();
        $get_state = State::all();
        $get_scheme = Scheme::all();
        return view('admin.create_project.create_project', compact("pia", "get_state", "get_scheme",));
    }

    public function createProject(Request $req)
    {
        $this->validate($req, [
            'scheme_id' => 'required|max:40',
            // 'proj_name' => 'required|max:30',
            'sac_order_no' => 'required',
            'sac_order_date' => 'required',
            'pro_code' => 'required',
            'state_id' => 'required',
            'district' => 'required',
            'project_doc' => 'max:1024',
            'project_header' => 'max:1024',
            'project_footer' => 'max:1024'
        ]);

        $file1 = $req->file('project_doc');
        $file_document = $req->sac_order_no.'_document.'.$file1->getClientOriginalExtension();
        $file2 = $req->file('project_header');
        $file_header = $req->sac_order_no.'_header.'.$file2->getClientOriginalExtension();
        $file3 = $req->file('project_footer');
        $file_footer = $req->sac_order_no.'_footer.'.$file3->getClientOriginalExtension();

        $Project = new Project();
        $Project->pia_id = $req->pia_id;
        $Project->scheme_id = $req->scheme_id;
        $Project->name = $req->sac_order_no;
        $Project->sanction_order_no = $req->sac_order_no;
        $Project->sanction_date = $req->sac_order_date;
        $Project->proposal_code = $req->pro_code;
        $Project->pac_date = $req->pac_date;
        $Project->state = $req->state_id;
        $Project->district = $req->district;
        $Project->project_duration = $req->proj_duration;
        $Project->total_target = $req->total_target;
        $Project->placement_target = $req->place_target;
        $Project->project_cost = str_replace(",", "", $req->proj_cost);
        $Project->central_share = str_replace(",", "", $req->central_share);
        $Project->state_share = str_replace(",", "", $req->state_share);
        $Project->mpr_project_id = $req->mpr_proj_id;
        $Project->consortium = $req->con_part;
        $Project->consortium_prn = $req->con_part_no;
        $Project->project_doc = $file_document;
        $Project->project_header = $file_header;
        $Project->project_footer = $file_footer;
        $Project->added_by = Auth::user()->id;
        $Project->save();

        for($i=0;$i<2;$i++){
            $cat = new CategoryType();
            $cat->san_order_no = $req->sac_order_no;
            $cat->category_type = $req->cat_type[$i];
            $cat->target_no = $req->target_no[$i];
            $cat->sc_no = $req->sc_no[$i];
            $cat->st_no = $req->st_no[$i];
            $cat->others_no = $req->others_no[$i];
            $cat->minorities_no = $req->minorities_no[$i];
            $cat->women_no = $req->women_no[$i];
            $cat->placement_no = $req->placement_no[$i];
            $cat->added_by = Auth::user()->id;
            $cat->save();
        }

        $path = public_path('Documents/Project_File');
        $file1->move($path,$file_document);
        $file2->move($path,$file_header);
        $file3->move($path,$file_footer);
        return redirect()->route('project_list')->with('alert_status','Project Added Successfully');
    }

    public function projectList()
    {
        $project_data = Project::with('getProjectList','getState','getDistrict')->orderByDesc("id")->get();
        // dd($project_data);
        return view('admin.create_project.project_list', compact('project_data'));
    }

    // public function viewProject(){
    //     $project_data = 
    // }

    public function centreForm()
    {
        $pia = User::where('user_code',Auth::user()->user_code)->with('getPia')->get();
        
        $get_project = Project::all();
        $get_state = State::all();
        $get_district = District::all();
        $project_data = Project::with('getProjectList','getState')->get();
        return view('admin.create_centre.create_centre', compact("pia","project_data" , "get_state","get_district"));
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

        $file = $req->file('centre_doc');
        $file_document = str_replace("/", "_", $req->centre_code).'_document.'.$file->getClientOriginalExtension();

        $center = new CentreDetails();
        $center->project_id = $req->project_id;
        $center->pia_id = $req->pia_id;
        $center->centre_code = $req->centre_code;
        $center->state = $req->state_id;
        $center->district = $req->district_id;
        $center->centre_name = $req->name_of_centre;
        $center->address = $req->address;
        $center->centre_doc = $file_document;
        $center->added_by = Auth::user()->id;
        $center->save();

        $path = public_path('Documents/Centre_File');
        $file->move($path,$file_document);

        return redirect()->route('centre_list')->with('alert_status','Centre Added Successfully');
    }

    public function centreList()
    {
        $centre_data = CentreDetails::with('getProjectName', 'getState','getDistrict')->orderByDesc("id")->get();
        return view('admin.create_centre.centre_list', compact('centre_data'));
    }


    public function qteamMemberForm()
    {
        $get_project = Project::all();
        return view('public.q team member.add_qteam_member',compact('get_project'));
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

        // $get_pia_id = Auth::user()->id;

        $QTeam = new QTeamMembersDetail();
        // $QTeam->pia_id = $get_pia_id;
        $QTeam->project_id = $req->project_id;
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
        $message->from(env('MAIL_USERNAME'), 'PSSPL');
        });


        $user = new User();
        $user->role_id = '3';
        $user->user_code = $req->q_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->route('q_team_member_list')->with('alert_success','Q Team Member Added Successfully');
    }

    public function qteamMemberList()
    {     
        $qteam_data = QTeamMembersDetail::with('getPiaName', 'getSanctionOrder' )->orderByDesc("id")->get();       
        return view('public.q team member.q_team_list', compact('qteam_data'));
    }


    public function centreInchargeForm()
    {
        $get_project = Project::all();
        $get_centre = CentreDetails::all();
        $get_qualifications = Qualification::all();
        return view('public.centre incharge.add_centre_incharge', compact("get_centre","get_project","get_qualifications"));
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
        $Cen_Inch->project_id = $req->project_id;
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
        $message->from(env('MAIL_USERNAME'), 'PSSPL');
        });

        $user = new User();
        $user->role_id = '5';
        $user->user_code = $req->ci_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->route('centre_incharge_list')->with('alert_success','Centre Incharge Added Successfully');
    }

    public function centreInchargeList()
    {
     
        $centre_incharge_data = CenterIncharge::with('getCentreName', 'getSanctionOrder' )->orderByDesc("id")->get();
       
        return view('public.centre incharge.centre_incharge_list', compact('centre_incharge_data'));
    }



    public function mobilizerForm()
    {
        $get_centre = CentreDetails::all();
        $get_project = Project::all();
        $get_state = State::all();
        $get_district = District::all();
        return view('public.mobilizer.add_mobilizer', compact("get_centre","get_project","get_state","get_district"));
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
        $Mobi->project_id = $req->project_id;
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
        $message->from(env('MAIL_USERNAME'), 'PSSPL');
        });


        $user = new User();
        $user->role_id = '4';
        $user->user_code = $req->mob_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        return redirect()->route('mobilizer_list')->with('alert_success','Mobilizer Added Successfully');
    }

    public function mobilizerList()
    {
     
        $mobilizer_data = Mobilizer::with('getCentreName', 'getSanctionOrder' )->orderByDesc("id")->get();
       
            
        return view('public.mobilizer.mobilizer_list', compact('mobilizer_data'));
    }

}