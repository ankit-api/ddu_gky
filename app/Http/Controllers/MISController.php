<?php

namespace App\Http\Controllers;

use App\Models\MIS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Project;
use Image;
use Mail;
use Auth;

class MISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function misForm()
    {
        $get_project = Project::all();
        return view('public.mis.create_mis',compact('get_project'));
    }

    public function createMis(Request $req)
    {
        $this->validate($req, [
            'mis_code' => 'required',
            'mis_type' => 'required|max:20',
            'name' => 'required|max:40',
            'email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required|min:10|max:255',
            'image_doc' => 'max:512',
            'sign_doc' => 'max:512'
        ]);

        $file_reg_code = str_replace("/", "_", $req->mis_code);

        $file1 = $req->file('image_doc');
        $file2 = $req->file('sign_doc');
        $filename1 = $file_reg_code.'_image.'.$file1->getClientOriginalExtension();
        $filename2 = $file_reg_code.'_sign.'.$file2->getClientOriginalExtension();

        $req->mis_type=="mis_head" ? $role_id="7" : $role_id="8";
        $req->mis_type=="mis_head" ? $mis_role="MIS Head" : $mis_role="MIS Executive";

        $mis = new MIS();
        $mis->mis_code = $req->mis_code;
        $mis->project_id = $req->project_id;
        $mis->mis_type = $role_id;
        $mis->name = $req->name;
        $mis->email = $req->email;
        $mis->phone_no = $req->contact_no;
        $mis->address = $req->address;
        $mis->photo = $filename1;
        $mis->signature = $filename2;
        $mis->added_by = Auth::user()->id;
        $mis->save();

        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bishtsonu251011@gmail.com';
        $from=env('MAIL_USERNAME'); 
        // $data= 
        // [  
        //     'otp'=>$random_password,
        //     'user'=>'MIS',
        // ];   
        
        $data= 
        [  
            'username'=>$req->mis_code,
            'password'=>$random_password,
            'name'=>$req->name,
            'email'=>$req->email,
            'usertype'=>$mis_role,
        ];    

        // Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        // $message->to($toEmail)
        // ->subject('Mail');
        // $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        // });

        Mail::send('mail.sendmail', $data, function ($message) use ($toEmail,$from) {
            $message->to($toEmail)
            ->subject('Login Credentials');
            $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
            });

        $user = new User();
        $user->role_id = $role_id;
        $user->user_code = $req->mis_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        $path = 'Documents/MIS';
        
        $img1 = Image::make($file1->getRealPath());
        $img1->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path.'/'.$filename1);

        $img2 = Image::make($file2->getRealPath());
        $img2->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path.'/'.$filename2);

        return redirect()->route('mis_list')->with('alert_status','MIS Added Successfully');
    }

    public function misList(){
        $mis_data = MIS::with('getUserType')->get();      
        return view('public.mis.mis_list', compact("mis_data"));
    }
}
