<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainer_details';
    public $timestamps = false;

    public function getCentreName(){
        return $this->hasOne(CentreDetails::class,'id','centre_id');
    }

    function getSanctionOrder(){
        return $this->hasOne(Project::class, 'id', 'project_id');
    }
    // function getProjectName(){
    //     return $this->hasOneThrough(Project::class, CentreDetails::class,  'project_id', 'id');
    // }
}
