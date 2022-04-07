<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MIS extends Model
{
    use HasFactory;

    protected $table = 'm_i_s';
    public $timestamps = false;

    public function getUserType(){
        return $this->hasOne(Role::class,'id','mis_type');
    }

    // function getPiaDetails(){
    //     return $this->hasOneThrough(PIA::class, Project::class,  'project_id', 'id');
    // }


}
