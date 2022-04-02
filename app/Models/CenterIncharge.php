<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenterIncharge extends Model
{
    use HasFactory;

    protected $table = 'centre_incharge_details';
    public $timestamps = false;

    function getCentreName(){
        return $this->hasOne(CentreDetails::class, 'id', 'centre_id');
    }
    
    function getSanctionOrder(){
        return $this->hasOne(Project::class, 'id', 'project_id');
    }
    // function getProjectName(){
    //     return $this->hasOneThrough(Project::class, CentreDetails::class,  'project_id', 'id');
    // }

}
