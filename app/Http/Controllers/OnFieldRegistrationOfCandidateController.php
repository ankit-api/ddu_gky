<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CenterDetails;
use App\Models\OnFieldRegistrationOfCandidate;
use App\Models\RegDocument;
use Auth;

class OnFieldRegistrationOfCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrationForm()
    {
        $get_centre = CenterDetails::all();     
        return view('admin.on_field_reg_of_candidate.on_field_reg_of_candidate', compact("get_centre" ));
    }

    public function postRegistration(Request $req)
    {
        session(['mob_id' => '3']);
        $this->validate($req, [
            'name' => 'required',
            'village' => 'required',
            'dom' => 'required',           
            'gender' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'category' => 'required',
            // 'pwd' => 'required',
            'minority' => 'required',
            'qualification' => 'required',
            'minority' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'ref' => 'required',
            // 'remark' => 'required',
            // 'doc' => 'required|mimes:png,jpg,jpeg,svg|max:2048'           
        ]);
        
        $mob_id = $req->session()->get('mob_id');

        //Unique Registration Code
        $total_rows = OnFieldRegistrationOfCandidate::orderBy('id', 'desc')->count();
        $register_code = "Reg/";
        if($total_rows==0){
            $register_code .= '0001';
        }else{
            $last_id = OnFieldRegistrationOfCandidate::orderBy('id', 'desc')->first()->id;
            $register_code .= sprintf("%'04d",$last_id + 1);
        }

        $register = new OnFieldRegistrationOfCandidate();
        $register->mob_id = $mob_id;
        $register->reg_code = $register_code;
        $register->name = $req->name;
        $register->village = $req->village;
        $register->date_of_mobilization = $req->dom;
        $register->date_of_birth  = $req->dob;
        $register->age = $req->age;
        $register->gender = $req->gender;
        $register->category = $req->category;
        !empty($req->pwd ) ? $register->pwd = $req->pwd : $register->pwd = 'NULL';
        $register->minority = $req->minority;
        $register->high_edu = $req->qualification;
        $register->referring_stk = $req->ref;
        $register->address = $req->address;
        $register->contact = $req->contact;
        $register->counselling_status = $req->counsel;
        !empty($req->remark ) ? $register->remarks = $req->remark : $register->remarks = 'NULL';
        $register->added_by = Auth::user()->id; 
        $register->registered_on = 
        $register->save();
        $insertedId = $register->id;


        $i = count($req->doc_type);        
        for ($j = 0; $j < $i; $j++) {  
            if(isset($req->file('doc')[$j])){  
                $file = $req->file('doc')[$j];                
                $filename = $register_code.'/'.$req->doc_type[$j].'.'.$file->getClientOriginalExtension();;
            
                $reg_doc = new RegDocument();
                $reg_doc->register_id = $insertedId;
                $reg_doc->type_of_document = $req->doc_type[$j];
                $reg_doc->file = $filename;
                $reg_doc->added_by = Auth::user()->id;         
                $reg_doc->save();     
                
                $path = 'document/reg_doc';
                $file->move($path,$file->getClientOriginalName());
            }
        }
        
        return redirect()->back()->with('alert_status','Candidate Registered Successfully!');
    }
}

