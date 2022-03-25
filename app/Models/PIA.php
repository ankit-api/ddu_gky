<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIA extends Model
{
    use HasFactory;

    protected $table = 'pia';
    public $timestamps = false;

    

    // function state()
    // {
    //     return $this->hasOneThrough(State::class, Project::class, 'state', 'id')->with('getProjectList');
    // }
}
