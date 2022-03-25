<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\State;
use App\Models\District;
use App\Models\OnFieldRegistrationOfCandidate;
use App\Models\Admission;
use App\Models\RegDocument;
use App\Models\FamilyDetail;
use App\Models\DocType;
use Auth;


class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admissionForm()
    {
        $batch = Batch::all();    
        $state = State::all();
        $get_doc_type = DocType::all(); 
        $reg_can = OnFieldRegistrationOfCandidate::all();
        return view('admin.candidate_admission.candidate_admission_form', compact("batch",'state','reg_can','get_doc_type'));
    }

    public function postAdmission(Request $req)
    { 
        session(['pia_id' => '1']);
        $this->validate($req, [
            // // 'reg_code' => 'required',
            // 'name' => 'required',
            // 'father_husband_name' => 'required',
            // 'mother_name' => 'required',
            // // 'gender' => 'required',
            // 'dob' => 'required',
            // 'age' => 'required',
            // 'identity_no' => 'required',
            // 'contact' => 'required',
            // // 'a_contact' => 'required',
            // // 'email' => 'required',
            // // 'a_email' => 'required',
            // 'pre_address' => 'required',
            // // 'per_address' => 'required',
            // 'qualification' => 'required',
            // // 'religion' => 'required',
            // // 'category' => 'required',
        ]);

         //Student Code
         $total_rows = Admission::orderBy('id', 'desc')->count();
         $stu_code = "Student-Id/";
         if($total_rows==0){
             $stu_code .= '0001';
         }else{
             $last_id = Admission::orderBy('id', 'desc')->first()->id;
             $stu_code .= sprintf("%'04d",$last_id + 1);
         }

         $student = new Admission();
         $student->student_code = $stu_code;
         $student->register_id = $req->reg_id;
         $student->batch_id = $req->batch;
         $student->name = $req->name;
         $student->father_husband_name = $req->father_husband_name;
         $student->mother_name = $req->mother_name;
         $student->gender = $req->gender;
         $student->dob = $req->dob;
         $student->age = $req->age;
         $student->individual_identity_no = $req->identity_no;
         $student->highest_qualification = $req->qualification;
         $student->contact = $req->contact;
         !empty($req->alternate_contact ) ? $student->alternate_contact = $req->alternate_contact : $student->alternate_contact = NULL;
        
         $student->email = $req->email;
         !empty($req->a_email ) ? $student->alternate_email = $req->a_email : $student->alternate_email = 'NULL';
        
         $student->present_address = $req->pre_address;
         !empty($req->per_address ) ? $student->permanent_address = $req->per_address : $student->permanent_address = 'NULL';

         $student->category = $req->category;
         $student->pwd = $req->pwd;
         !empty($req->pwd_type ) ? $student->pwd_type = $req->pwd_type : $student->pwd_type = 'NULL';
    
         $student->category = $req->category;
         $student->religion = $req->religion;
         $student->other_group = $req->other_vul_group;
       
         !empty($req->vul_group_type ) ? $student->other_group_type = $req->vul_group_type : $student->other_group_type = 'NULL';
       
         !empty($req->sess_no ) ? $student->sess_no = $req->sess_no : $student->sess_no = NULL;
       
         !empty($req->bpl_no ) ? $student->bpl_ration_card_no = $req->bpl_no : $student->bpl_ration_card_no = NULL;
        
         !empty($req->mnrega_no ) ? $student->job_card_no = $req->mnrega_no : $student->job_card_no = NULL;
         
         !empty($req->rsby_no ) ? $student->rsby_card_no = $req->rsby_no : $student->rsby_card_no = NULL;
        
         !empty($req->aay_ration_no ) ? $student->aay_ration_card = $req->aay_ration_no : $student->aay_ration_card = NULL;
        
         !empty($req->a_income ) ? $student->annual_income = $req->a_income : $student->annual_income = NULL;
         $student->is_candidate_a_family_memmber_of_sgh_member =  $req->c_sgh;
        
         !empty($req->c_sgh_name ) ? $student->sgh_name = $req->c_sgh_name : $student->sgh_name = 'NULL';
        
         !empty($req->c_sgh_id ) ? $student->sgh_id = $req->c_sgh_id : $student->sgh_id = 'NULL';
         
         !empty($req->sgh_member_name ) ? $student->name_of_sgh_member = $req->sgh_member_name : $student->name_of_sgh_member = 'NULL';
         $student->family_head_name =  $req->h_name;
         $student->family_head_highest_education =  $req->h_qualification;
         $student->family_annual_income =  $req->fam_income;
         $student->no_of_family_member =  $req->fam_mem_no;
         $student->trade =  $req->trade;
         $student->allocated_trade =  $req->allocate_trade;
         !empty($req->comment ) ? $student->comment = $req->comment : $student->comment = 'NULL';
         $student->added_by = Auth::user()->id; 
         $student->save();
         $insertedId = $student->id;

        $i = count($req->m_name);        
        for ($j = 0; $j < $i; $j++) {     
            $family = new FamilyDetail();
            $family->admission_id = $insertedId;
            $family->name = $req->m_name[$j];
            $family->relation = $req->relation[$j];
            $family->gender = $req->m_gender[$j];
            $family->age = $req->m_age[$j];
            $family->is_married = $req->m_status[$j];
            $family->is_earning = $req->m_earn[$j];
            $family->occupation = $req->m_occupation[$j];
            $family->is_sgh_member = $req->m_sgh[$j];
            ($req->m_sgh_id[$j]!= NULL) ? $student->sgh_id = $req->m_sgh_id[$j] : $student->sgh_id = 'NULL';
          
         
            $family->added_by = Auth::user()->id; 
            $family->save();
        }

        $i = count($req->doc_type);      
        for ($j = 0; $j < $i; $j++) {  
            if(isset($req->file('doc')[$j])){  
                $document = RegDocument::where('register_id', $req->reg_id)->where('doc_type_id', $req->doc_type[$j])->get();
                if( $document == "false")
                   {
                    return redirect()->back()->with('alert_status','Duplicate File!');
                   }    else {     
                    $reg_code = OnFieldRegistrationOfCandidate::select('reg_code')->find($req->reg_id);
                    $file = $req->file('doc')[$j];                
                    $filename = $reg_code['reg_code'].'/'.$req->doc_type[$j].'.'.$file->getClientOriginalExtension();;
                
                    $reg_doc = new RegDocument();
                    // $reg_doc->register_id = $insertedId;
                     $reg_doc->register_id = 1;
                    $reg_doc->doc_type_id = $req->doc_type[$j];
                    $reg_doc->file = $filename;
                    $reg_doc->added_by = Auth::user()->id;         
                    $reg_doc->save();    
                
                    $path = 'document/reg_doc';
                    $file->move($path,$file->getClientOriginalName());
                }
            }
        }
        
        return redirect()->back()->with('alert_status','Admission done Successfully!');
    }

}