<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnFieldRegistrationOfCandidate extends Model
{
    use HasFactory;

    protected $table = 'on_field_registration_of_candidates';
    public $timestamps = false;

    public function mob_name(){
        return $this->hasOne(Mobilizer::class,'id','mob_id');
    }
}
