<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc2Type;
use App\Models\PIA;
use App\Models\MIS;
use App\Models\Mobilizer;
use App\Models\Trainer;
use App\Models\CenterIncharge;
use App\Models\QTeamMembersDetail;
use App\Models\OnFieldRegistrationOfCandidate;
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
}
