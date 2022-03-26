<?php

namespace App\Http\Controllers;

use App\Models\MIS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
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
        return view('public.mis.create_mis');
    }

    public function createMis(Request $req)
    {
        $this->validate($req, [
            'mis_code' => 'required',
            'mis_type' => 'required|max:20',
            'name' => 'required|max:40',
            'email' => 'required|email',
            'contact_no' => 'required',
            'address' => 'required|min:10|max:255'
        ]);

        $file1 = $req->file('image_doc');
        $file2 = $req->file('sign_doc');
        $filename1 = $req->mis_code.'_image_'.$file1->getClientOriginalExtension();
        $filename2 = $req->mis_code.'_sign_'.$file2->getClientOriginalExtension();

        $mis = new MIS();
        $mis->mis_code = $req->mis_code;
        $mis->mis_type = $req->mis_type;
        $mis->name = $req->name;
        $mis->email = $req->email;
        $mis->phone_no = $req->contact_no;
        $mis->address = $req->address;
        $mis->photo = $req->filename1;
        $mis->signature = $req->filename2;
        $mis->added_by = Auth::user()->id;
        $mis->save();

        $req->mis_type=="mis_head" ? $role_id="7" : $role_id="8";
        $random_password =  Str::random(8);
        
        $hashed_random_password = Hash::make($random_password);

        // $toEmail = 'ankit.bisht@prakharsoftwares.com';
        $toEmail = 'bhandaridisha0309@gmail.com';
        $from=env('MAIL_USERNAME'); 
        $data= 
        [  
            'otp'=>$random_password,
            'user'=>'MIS',
        ];                

        Mail::send('mail.otp', $data, function ($message) use ($toEmail,$from) {
        $message->to($toEmail)
        ->subject('Mail');
        $message->from(env('MAIL_USERNAME'), env('APP_NAME'));
        });


        $user = new User();
        $user->role_id = $role_id;
        $user->user_code = $req->mis_code;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $hashed_random_password;
        $user->save();

        $path = 'document/MIS';
        $file1->move($path,$filename1);
        $file2->move($path,$filename2);

        return redirect()->back()->with('alert_status','MIS Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MIS  $mIS
     * @return \Illuminate\Http\Response
     */
    public function show(MIS $mIS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MIS  $mIS
     * @return \Illuminate\Http\Response
     */
    public function edit(MIS $mIS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MIS  $mIS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MIS $mIS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MIS  $mIS
     * @return \Illuminate\Http\Response
     */
    public function destroy(MIS $mIS)
    {
        //
    }
}
