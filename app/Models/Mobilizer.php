<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilizer extends Model
{
    use HasFactory;

    protected $table = 'mobilizers';
    public $timestamps = false;

    function getProject(){
        return $this->hasOne(Pia::class, 'id', 'pia_id');
    }

    function getState(){
        return $this->hasOne(State::class, 'id', 'state');
    }

    function getDistrict(){
        return $this->hasOne(District::class, 'id', 'district');
    }
}
