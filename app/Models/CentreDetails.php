<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreDetails extends Model
{
    use HasFactory;

    protected $table = 'centre';
    public $timestamps = false;

    function getProjectName(){
        return $this->hasOne(Project::class, 'id', 'project_id');
    }

    function getState(){
        return $this->hasOne(State::class, 'id', 'state');
    }

    function getDistrict(){
        return $this->hasOne(District::class, 'id', 'district');
    }
}
