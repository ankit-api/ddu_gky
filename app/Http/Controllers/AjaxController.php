<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc2Type;

class AjaxController extends Controller
{
    public function getDoc2Type(Request $req){
        $docId = $req->id;
        $data['doc2_type_data'] = Doc2Type::where('doc1_type_id', $docId)->get();
        return response()->json($data);
    }
}
