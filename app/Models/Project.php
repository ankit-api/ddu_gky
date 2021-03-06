<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    public $timestamps = false;

    function getProjectList(){
        return $this->hasOne(Pia::class, 'id', 'pia_id');
    }

    function getState(){
        return $this->hasOne(State::class, 'id', 'state');
    }

    function getDistrict(){
        return $this->hasOne(District::class, 'id', 'district');
    }

    // public function getState({
    //     return $this->hasOne(Project::class, 'pia_id', 'id');
    // })
}
