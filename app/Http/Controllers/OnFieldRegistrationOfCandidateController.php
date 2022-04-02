<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentreDetails;
use App\Models\OnFieldRegistrationOfCandidate;
use App\Models\RegDocument;
use App\Models\Doc1Type;
use App\Models\Block;
use App\Models\Doc2Type;
use App\Models\Mobilizer;
use Carbon\Carbon;
use Auth;
use Image;

class OnFieldRegistrationOfCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrationForm()
    {
        $get_centre = CentreDetails::all(); 
        $get_doc1_type = Doc1Type::all();      
        $get_block = Block::all();
        $get_mobi = Mobilizer::all();
        return view('admin.on_field_reg_of_candidate.on_field_reg_of_candidate', compact("get_centre","get_doc1_type","get_block","get_mobi"));
    }

    public function postRegistration(Request $req)
    {
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
            'sign_doc' => 'required|mimes:png,jpg,jpeg,svg|max:512'           
        ]);

        //Unique Registration Code
        // $total_rows = OnFieldRegistrationOfCandidate::orderBy('id', 'desc')->count();
        // $register_code = "Reg/";
        // if($total_rows==0){
        //     $register_code .= '0001';
        // }else{
        //     $last_id = OnFieldRegistrationOfCandidate::orderBy('id', 'desc')->first()->id;
        //     $register_code .= sprintf("%'04d",$last_id + 1);
        // }

        $file = $req->file('sign_doc');               
        $signdoc = $file->getClientOriginalName();

        $register = new OnFieldRegistrationOfCandidate();
        $register->mob_id = $req->ref;
        $register->reg_code = $req->reg_code;
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
        !empty($req->ref ) ? $register->referring_stk = $req->ref : $register->referring_stk = 'NULL';
        $register->address = $req->address;
        $register->contact = $req->contact;
        $register->counselling_status = $req->counsel;
        !empty($req->remark ) ? $register->remarks = $req->remark : $register->remarks = 'NULL';
        $register->signature_file = $signdoc;
        $register->added_by = Auth::user()->id; 
        $register->registered_on = Carbon::now();
        $register->save();
        $reg_last_id = $register->id;
    

        $file_reg_code = str_replace("/", "_", $req->reg_code);
        $file_loc = "Documents/Registration/$file_reg_code";
        if (!file_exists($file_loc)) {
            mkdir("Documents/Registration/$file_reg_code", 0777, true);
        }
        // $file->move($file_loc,$signdoc);

        $img = Image::make($file->getRealPath());
        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($file_loc.'/'.$signdoc);

        $i = count($req->doc2_type);        
        for ($j = 0; $j < $i; $j++) {  
            if(isset($req->file('doc')[$j])){  
                $doc_name = Doc2Type::where('id', $req->doc2_type[$j])->first('doc2_type_name');
        
                $file = $req->file('doc')[$j];                
                $filename = $doc_name['doc2_type_name'].'.'.$file->getClientOriginalExtension();
                $filename = str_replace("/","-", $filename);
                $reg_doc = new RegDocument();
                $reg_doc->register_id = $reg_last_id;
                $reg_doc->doc1_type_id = $req->doc1_type[$j];
                $reg_doc->doc2_type_id = $req->doc2_type[$j];
                $reg_doc->file = $filename;
                $reg_doc->added_by = Auth::user()->id;         
                $reg_doc->save();  

                $file->move($file_loc,$filename);
            }
        }
        
        return redirect()->route('candidate_register_list')->with('alert_status','Candidate Registered Successfully!');
    }

    public function registrationList(){
        $candidate_data = OnFieldRegistrationOfCandidate::with('mob_name')->orderByDesc("id")->get();      
        return view('admin.on_field_reg_of_candidate.registration_list', compact("candidate_data"));
    }
}


