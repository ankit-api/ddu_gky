<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\Doc2Type;
use App\Models\PIA;
use App\Models\MIS;
use App\Models\Mobilizer;
use App\Models\Trainer;
use App\Models\CenterIncharge;
use App\Models\QTeamMembersDetail;
use App\Models\OnFieldRegistrationOfCandidate;
use App\Models\District;
use App\Models\Block;
use App\Models\CentreDetails;
use App\Models\Batch;
use App\Models\BatchAllotment;
use Response;

class AjaxController extends Controller
{
    public function getDoc2Type(Request $req){
        $docId = $req->id;
        $data['doc2_type_data'] = Doc2Type::where('doc1_type_id', $docId)->get();
        return response()->json($data);
    }

    public function pia_check_duplicate(Request $req){
        $check_dup = PIA::where('pia_code',$req->pia_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function mis_check_duplicate(Request $req){
        $check_dup = MIS::where('mis_code',$req->mis_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function mob_check_duplicate(Request $req){
        $check_dup = Mobilizer::where('mob_id',$req->mob_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function qteam_check_duplicate(Request $req){
        $check_dup = QTeamMembersDetail::where('qteam_member_code',$req->qteam_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function trainer_check_duplicate(Request $req){
        $check_dup = Trainer::where('trainer_code',$req->trainer_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function centreinch_check_duplicate(Request $req){
        $check_dup = CenterIncharge::where('centre_incharge_code',$req->centreinch_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function reg_check_duplicate(Request $req){
        $check_dup = OnFieldRegistrationOfCandidate::where('reg_code',$req->reg_code)->count();
        if($check_dup){
            return Response::json($check_dup);
        }
        else{
            return Response::json($check_dup);
        }
    }

    public function fetchDistrict(Request $request)
    {
        $data = District::where("state_id",$request->state_id)->get(["district_name", "id"]);
        return response()->json($data);
    }

    public function fetchBlock(Request $request)
    {
        $data = Block::where("district_id",$request->district_id)->get(["block_name", "id"]);
        return response()->json($data);
    }

    public function fetchRegData(Request $request)
    {
        $data = OnFieldRegistrationOfCandidate::where("id",$request->reg_id)->first();
        return response()->json($data);
    }

    public function fetchBlockByCentre(Request $request)
    {
        $id_by_centre_id = CentreDetails::where("id",$request->centre_id)->first();
        $data = Block::where("district_id",$id_by_centre_id->district)->get(["block_name", "id"]);
        return response()->json($data);
    }

    public function checkCreateBatch(Request $req)
    {
        $batch_no = Batch::where('batch_summary_status','<>', 'complete')->where('centre_id', $req->centre_id)->count();
           if($batch_no == 3){
                $status = "batch";
                $msg = "There are already 3 batch, which are currently running ";
                return response()->json([$status,$msg]); 
           } else{
            $candidate_no = Admission::where("batch_enroll_status", 'unenroll')->count();       
                if($candidate_no > 35){  
                    $status = "candidate";                  
                    $req_cand_no = 35 - $candidate_no;
                    $msg = "Batch cannot be created(".$req_cand_no." more candidates required) ";
                    return response()->json([$status,$msg]); 
                } else {
                $status = "create";
                $trainer = Trainer::where("centre_id",$req->centre_id)->get(["name", "id"]);
                return response()->json([$status,$trainer]); 
                }
            }
        
       
    }

}
