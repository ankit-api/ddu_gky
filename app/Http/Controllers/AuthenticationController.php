<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class AuthenticationController extends Controller
{
   
    public function changePassword()
    {
        return view('admin.authentication.changePassword');
    }

    public function postChangePassword(request $req)
    {
        $this->validate($req, [
            'cur_pass' => 'required',
            'new_pass' => 'required',
            'con_pass' => 'required|required_with:new_pass|same:new_pass',

        ],[
            'con_pass.same' => 'New and Confirm Password must be match  !'           

        ]);

        
        $password = User::select('password')->where('id', Auth::user()->id)->first();
        if (Hash::check( $req->cur_pass, $password['password'])) {
            
            $user = User::find(Auth::user()->id); 
            $user->password = Hash::make($req->new_pass);             
            $user->save();

            return redirect()->back()->with('alert_status','Password has been changes successfully !');
            
        } else {
            return redirect()->back()->with('alert_status','Incorrect Current Password !'); 
        }
    } 






}