<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MIS;
use App\Models\User;
use App\Models\PIA;
use Image;
use Auth;

class ProfileController extends Controller
{
    public function misHeadProfileForm()
    {
        $mis_data = MIS::where('mis_code', Auth::user()->user_code)->first();
        return view('admin.profile.mis_head_profile', compact("mis_data"));
    }
    public function postMisHeadProfileForm(Request $req)
    {
        $this->validate($req, [           
            'name' => 'required|max:40',
            'email' => 'required|email',
            'contact' => 'required',
            'address' => 'required|min:10|max:255',
            // 'image_doc' => 'max:512',
            // 'sign_doc' => 'max:512'
        ]);
        $path = 'Documents/MIS';
        $mis_code = str_replace("/", "_", Auth::user()->user_code);

        if($req->file('image_doc')){
            $file1 = $req->file('image_doc');           
            $filename1 = $mis_code.'_image.'.$file1->getClientOriginalExtension();

            $img1 = Image::make($file1->getRealPath());
            $img1->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$filename1);
        }
        if($req->file('sign_doc')){
            $file2 = $req->file('sign_doc');        
            $filename2 = $mis_code.'_sign.'.$file2->getClientOriginalExtension();

            $img2 = Image::make($file2->getRealPath());
            $img2->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$filename2);
        }
        $mis_id = MIS::where('mis_code', Auth::user()->user_code)->first('id'); 
        $mis = MIS::find($mis_id->id);
        $mis->name = $req->name;
        $mis->email = $req->email;
        $mis->phone_no = $req->contact;
        $mis->address = $req->address;
        if($req->file('sign_doc')){
            $mis->signature = $filename2;
        }
        if($req->file('image_doc')){
            $mis->photo = $filename1;
        }
        $mis->added_by = Auth::user()->id;
        $mis->save();

        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect()->route('home')->with('alert_status','Profile Updated Successfully ! ');

    }


    public function adminProfileForm()
    {
        $admin_data = User::where('user_code', Auth::user()->user_code)->first();
        return view('admin.profile.admin_profile', compact("admin_data"));
        
    }
    public function postAdminProfileForm(Request $req)
    {
        $this->validate($req, [           
            'name' => 'required|max:40',
            'email' => 'required|email',
           
        ]);    

        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect()->route('home')->with('alert_status','Profile Updated Successfully ! ');
       
    }


    public function piaProfileForm()
    {
        $pia_data = PIA::where('pia_code', Auth::user()->user_code)->first();
        return view('admin.profile.pia_profile', compact("pia_data"));
        
    }

    public function postPiaProfileForm(Request $req)
    {
        $this->validate($req, [           
            'name' => 'required|max:40',
            'email' => 'required|email',
            'contact' => 'required',
            'landline' => 'required',
            'address' => 'required|min:10|max:255',
            
        ]);
        $path = 'Documents/PIA_File';

        if($req->file('pia_doc')){
            $file = $req->file('pia_doc');
            $pia_code = str_replace("/", "_", Auth::user()->user_code);
            $filename = $pia_code.'.'.$file->getClientOriginalExtension();

            $img = Image::make($file->getRealPath());
            $img->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path.'/'.$filename);
        }
        
        $pia_is_id = PIA::where('mis_code', Auth::user()->user_code)->first('id'); 
        $pia = PIA::find($mis_id->id);
        $pia->pia_name = $req->name;
        $pia->email = $req->email;
        $pia->phone_no = $req->contact;
        $pia->landline_no = $req->landline;
        $pia->address = $req->address;       
        if($req->file('pia_doc')){
            $pia->pia_doc = $filename;
        }
        $pia->save();

        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        return redirect()->route('home')->with('alert_status','Profile Updated Successfully ! ');
    }
}
