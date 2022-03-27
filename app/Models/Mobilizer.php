<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilizer extends Model
{
    use HasFactory;

    protected $table = 'mobilizers';
    public $timestamps = false;

    function getCentreName(){
        return $this->hasOne(CentreDetails::class, 'id', 'centre_id');
    }

    function getProjectName(){
        return $this->hasOneThrough(Project::class, CentreDetails::class,  'project_id', 'id');
    }

    

}
