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
        return $this->hasOne(PIA::class, 'pia_id','id');
    }
}
