<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\PIA;
use App\Models\Project;
use App\Models\CenterDetails;
use App\Models\State;
use App\Models\District;
use App\Models\User;
use Mail;
use Auth;
use App\Models\Trainer;
use App\Models\TrainerExperience;
use App\Models\TrainerEducation;


class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trainerForm()
    {
        $get_pia = PIA::all();
        $get_project = Project::all();
        $get_centre = CenterDetails::all();      
        $get_state = State::all();
        $get_district = District::all();
        return view('public.trainer.create_trainer', compact("get_pia", "get_project", "get_centre", "get_state", "get_district"));
    }

    public function createTrainer(Request $req)
    {
        session(['pia_id' => '1']);
        $this->validate($req, [
            'pia_name' => 'required',
            'project_name' => 'required',
            'centre_name' => 'required',
            'name' => 'required',
            'relation_name' => 'required',
            // 'domain' => 'required',
            // 'add_skill' => 'required',
            'gender' => 'required',
            'category' => 'required',
            'pwd' => 'required',
            // 'pwd_type' => 'required',
            'adhaar' => 'required',
            // 'district_id' => 'required'
        ]);

        $get_pia_id = $req->session()->get('pia_id');        
        
        //Trainer Code
        $total_rows = Trainer::orderBy('id', 'desc')->count();
        $trainer_code = "Trainer/";
        if($total_rows==0){
            $trainer_code .= '0001';
        }else{
            $last_id = Trainer::orderBy('id', 'desc')->first()->id;
            $trainer_code .= sprintf("%'04d",$last_id + 1);
        }

        //Skill array to string 
        if(!empty($req->add_skill))
        {
            $skill = implode(",",$req->add_skill);
        } else {
            $skill = 'NULL';
        }
       
        $trainer = new Trainer();
        $trainer->centre_id = $req->centre_name;
        $trainer->trainer_code  = $trainer_code;
        $trainer->name =  $req->name;
        $trainer->relation = $req->relation_name;
        $trainer->relative_name = $req->relative_name;
        !empty($req->domain ) ? $trainer->domain = $req->domain : $trainer->domain = 'NULL';
        $trainer->additional_skill = $skill;
        $trainer->gender = $req->gender;
        $trainer->dob = $req->dob;
        $trainer->category = $req->category;
        $trainer->pwd = $req->pwd;
        !empty($req->pwd_type ) ? $trainer->pwd_type = $req->pwd_type : $trainer->pwd_type = 'NULL';
        $trainer->aadhaar_no = $req->adhaar;
        !empty($req->other_info ) ? $trainer->other_info = $req->other_info : $trainer->other_info = 'NULL';
        $trainer->added_by = Auth::user()->id;
        $trainer->save();
        $insertedId = $trainer->id;
     
        //Add Trainer Qualification
        $i = count($req->qualification);        
        for ($j = 0; $j < $i; $j++) {        
          $trainer_edu = new TrainerEducation();
          $trainer_edu->trainer_id = $insertedId;
          $trainer_edu->qualification = $req->qualification[$j];
          ($req->q_detail[$j]!= NULL) ? $trainer_edu->qualification_details = $req->q_detail[$j] : $trainer_edu->qualification_details = 'NULL';
          $trainer_edu->board = $req->university[$j];
          $trainer_edu->subject = $req->subject[$j];
          $trainer_edu->year_of_passing = $req->yop[$j];
          $trainer_edu->percentage = $req->percentage[$j];
          $trainer_edu->added_by = Auth::user()->id;         
          $trainer_edu->save();          
        }

        //Add Trainer Experience
        $i = count($req->from);   
        for ($j = 0; $j < $i; $j++) {
        if($req->from[$j]!= NULL){
          $trainer_exp = new TrainerExperience();
          $trainer_exp->trainer_id = $insertedId;          
          $trainer_exp->from = $req->from[$j];
          $trainer_exp->to = $req->to[$j];
          $trainer_exp->company_name = $req->c_name[$j];
          $trainer_exp->start_designation = $req->s_desg[$j];
          $trainer_exp->last_designation = $req->l_desg[$j];
          $trainer_exp->last_salary_drawn = $req->l_salary[$j];
          $trainer_exp->added_by = Auth::user()->id;          
          $trainer_exp->save();   
        }       
        }

        // Random Password generate
        $random_password =  Str::random(8);        
        $hashed_random_password = Hash::make($random_password);

        //Mail Section

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'Trainer',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });


        $user = new User();
        $user->role_id = '6';
        $user->user_code = $trainer_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();
       
        return redirect()->back()->with('alert_status','Trainer Added Successfully!');

    }
   
}