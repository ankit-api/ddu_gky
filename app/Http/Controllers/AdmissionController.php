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
use App\Models\CentreDetails;
use App\Models\Doc1Type;
use App\Models\Doc2Type;
use Auth;
use Image;


class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admissionForm()
    {  
        $state = State::all();
        $get_doc1_type = Doc1Type::all(); 
        $reg_can = OnFieldRegistrationOfCandidate::where('added_by',Auth::user()->id)->get();
        $centre = CentreDetails::where('added_by', Auth::user()->id)->get();
        return view('admin.candidate_admission.candidate_admission_form', compact('centre','state','reg_can','get_doc1_type'));
    }

    public function postAdmission(Request $req)
    { 
        $this->validate($req, [
            // 'reg_code' => 'required',
            'name' => 'required',
            'father_husband_name' => 'required',
            'mother_name' => 'required',
            // 'gender' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'identity_no' => 'required',
            'contact' => 'required',
            // 'a_contact' => 'required',
            // 'email' => 'required',
            // 'a_email' => 'required',
            'pre_address' => 'required',
            // 'per_address' => 'required',
            'qualification' => 'required',
            // 'religion' => 'required',
            // 'category' => 'required',
        ]);
         
        $file = $req->file('candidate_doc');               
        $file_document = 'Candidate_doc.'.$file->getClientOriginalExtension();

         $student = new Admission();
         $student->centre_id = $req->centre_id;
         $student->register_id = $req->reg_id;
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
         $student->is_candidate_a_family_member_of_shg_member =  $req->c_shg;
        
         !empty($req->c_shg_name ) ? $student->shg_name = $req->c_shg_name : $student->shg_name = 'NULL';
        
         !empty($req->c_shg_id ) ? $student->shg_id = $req->c_shg_id : $student->shg_id = 'NULL';
         
         !empty($req->shg_member_name ) ? $student->name_of_shg_member = $req->shg_member_name : $student->name_of_shg_member = 'NULL';
         $student->family_head_name =  $req->h_name;
         $student->family_head_highest_education =  $req->h_qualification;
         $student->family_annual_income =  $req->fam_income;
         $student->no_of_family_member =  $req->fam_mem_no;
         $student->trade =  $req->trade;
         $student->allocated_trade =  $req->allocate_trade;
         !empty($req->comment ) ? $student->comment = $req->comment : $student->comment = 'NULL';
         $student->candidate_doc = $file_document;
         $student->added_by = Auth::user()->id; 
         $student->save();
         $admsn_id = $student->id;

         $reg_code = OnFieldRegistrationOfCandidate::select('reg_code')->find($req->reg_id);
        $file_reg_code = str_replace("/", "_", $reg_code['reg_code']);
        $file_loc = "Documents/Registration/$file_reg_code";
        if (!file_exists($file_loc)) {
            mkdir("Documents/Registration/$file_reg_code", 0777, true);
        }
        
        $file->move($file_loc,$file_document);
      

        $i = count($req->m_name);        
        for ($j = 0; $j < $i; $j++) {     
            $family = new FamilyDetail();
            $family->admission_id = $admsn_id;
            $family->name = $req->m_name[$j];
            $family->relation = $req->relation[$j];
            $family->gender = $req->m_gender[$j];
            $family->age = $req->m_age[$j];
            $family->marital_status = $req->m_status[$j];
            $family->is_earning = $req->m_earn[$j];
            $family->occupation = $req->m_occupation[$j];
            $family->is_shg_member = $req->m_shg[$j];
            // !empty($req->m_shg_id ) ? $student->shg_id = $req->m_shg_id[$j] : $student->shg_id = 'NULL';
            ($req->m_shg_id[$j]!= NULL) ? $student->shg_id = $req->m_shg_id[$j] : $student->shg_id = 'NULL';
            $family->added_by = Auth::user()->id; 
            $family->save();
        }

        $i = count($req->doc2_type);      
        for ($j = 0; $j < $i; $j++) {  
            if(isset($req->file('doc')[$j])){  
                $document = RegDocument::where('register_id', $req->reg_id)->where('doc1_type_id', $req->doc1_type[$j])->where('doc2_type_id', $req->doc2_type[$j])->count();
                if( $document == 0)
                   {                  
                    $doc_name = Doc2Type::where('id', $req->doc2_type[$j])->first('doc2_type_name');
                    $file = $req->file('doc')[$j];                
                    $filename = $doc_name['doc2_type_name'].'.'.$file->getClientOriginalExtension();
                    $filename = str_replace("/","-", $filename);
                
                    $reg_doc = new RegDocument();                   
                    $reg_doc->register_id = $req->reg_id;
                    $reg_doc->doc1_type_id = $req->doc1_type[$j];
                    $reg_doc->doc2_type_id = $req->doc2_type[$j];
                    $reg_doc->file = $filename;
                    $reg_doc->added_by = Auth::user()->id;         
                    $reg_doc->save();    
                
                    // $path = 'document/reg_doc';
                    $file->move($file_loc,$file->getClientOriginalName());
                    // $req->file($filename)->storeAs($path,$filename);
                   
                }
            }
        }
        
        return redirect()->route('admission_list')->with('alert_success','Admission done Successfully!');
    }

    public function admissionList(){
        $candidate_data = Admission::with('registrationCode')->orderByDesc("id")->get();      
        return view('admin.candidate_admission.admission_list', compact("candidate_data"));
    }

    public function dossierList(){
        $candidate_data = Admission::with('batchCode')->orderByDesc("id")->get();      
        return view('admin.candidate_dossier.dossier_list', compact("candidate_data"));
    }

}