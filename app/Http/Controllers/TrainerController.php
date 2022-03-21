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
        // dd($req);

        $get_pia_id = $req->session()->get('pia_id');

        $total_rows = Trainer::orderBy('id', 'desc')->count();
        
        //Trainer Code
        $trainer_code = "Trainer/";
        if($total_rows==0){
            $trainer_code .= '0001';
        }else{
            $last_id = Trainer::orderBy('id', 'desc')->first()->id;
            $trainer_code .= sprintf("%'04d",$last_id + 1);
        }

        $trainer = new Trainer();
        $trainer->centre_id = $_POST['centre_name'];
        $trainer->trainer_code  = $trainer_code;
        $trainer->name =  $_POST['name'];
        $trainer->relation = $_POST['relation_name'];
        $trainer->relative_name = $_POST['relative_name'];
        !empty($_POST['domain'] ) ? $trainer->domain = $_POST['domain'] : $trainer->domain = 'NULL';
        !empty($_POST['add_skill']) ? $trainer->additional_skill = $_POST['add_skill'] : $trainer->additional_skill = 'NULL';
        $trainer->gender = $_POST['gender'];
        $trainer->dob = $_POST['dob'];
        $trainer->category = $_POST['category'];
        $trainer->pwd = $_POST['pwd'];
        !empty($_POST['pwd_type'] ) ? $trainer->pwd_type = $_POST['pwd_type'] : $trainer->pwd_type = 'NULL';
        $trainer->aadhaar_no = $_POST['adhaar'];
        $trainer->other_info = $_POST['other_info'];
        $trainer->added_by = Auth::user()->id;
        $trainer->save();
        $insertedId = $trainer->id;
        // dd( $insertedId);

        //Add Trainer Qualification
        $i = count($_POST['qualification']);        
        for ($j = 0; $j < $i; $j++) {        
          $trainer_edu = new TrainerEducation();
          $trainer_edu->trainer_id = $insertedId;
          $trainer_edu->qualification = $_POST['qualification'][$j];
          $trainer_edu->qualification_details = $_POST['q_detail'][$j];
          $trainer_edu->board = $_POST['university'][$j];
          $trainer_edu->subject = $_POST['subject'][$j];
          $trainer_edu->year_of_passing = $_POST['yop'][$j];
          $trainer_edu->percentage = $_POST['percentage'][$j];
          $trainer_edu->added_by = Auth::user()->id;         
          $trainer_edu->save();          
        }

        //Add Trainer Experience
        $i = count($_POST['from']);        
        for ($j = 0; $j < $i; $j++) {
          $trainer_exp = new TrainerExperience();
          $trainer_exp->trainer_id = $insertedId;          
          $trainer_exp->from =
          $trainer_exp->to =
          $trainer_exp->company_name =
          $trainer_exp->start_designation =
          $trainer_exp->last_designation =
          $trainer_exp->last_salary_drawn =
          $trainer_exp->added_by = Auth::user()->id;          
          $trainer_exp->save();          
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
        $user->email = $req->official_email;
        $user->password = $hashed_random_password;
        $user->save();
       
        return redirect()->back()->with('alert_status','Trainer Added Successfully!');

    }
   
}