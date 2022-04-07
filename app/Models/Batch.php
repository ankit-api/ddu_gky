<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $table = 'batch_details';
    public $timestamps = false;

    public function addedBy(){
        return $this->hasOne(User::class,'id','added_by');
    }

    public function trainerDetails(){
        return $this->hasOne(Trainer::class,'id','trainer_id');
    }

    public function allotedCandidateCount(){
        return $this->hasMany(BatchAllotment::class,'batch_id','id');
    }

    // public function allotedCandidateList(){
    //     return $this->hasManyThrough( BatchAllotment::class,OnFieldRegistrationOfCandidate::class,'register_id','id');
    // }

}
