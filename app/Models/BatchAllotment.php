<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchAllotment extends Model
{
    use HasFactory;

    protected $table = 'batch_allotment_details';
    public $timestamps = false;

    public function allotedCandidateList(){
        return $this->hasOne(OnFieldRegistrationOfCandidate::class,'id','register_id');
    }
    public function batchCode(){
        return $this->hasOne(Batch::class,'id','batch_id');
    }
}
