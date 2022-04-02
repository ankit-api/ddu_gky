<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QTeamMembersDetail extends Model
{
    use HasFactory;
    
    protected $table = 'q_team_members_details';
    public $timestamps = false;

    function getPiaName(){
        return $this->hasOne(PIA::class, 'id', 'pia_id');
    }

    function getSanctionOrder(){
        return $this->hasOne(Project::class, 'id', 'project_id');
    }

    // function getProjectName(){
    //     return $this->hasOneThrough(Project::class, CentreDetails::class,  'project_id', 'id');
    // }
}
