<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegDocument extends Model
{
    use HasFactory;

    protected $table = 'reg_documents';
    public $timestamps = false;

    public function getDocNameFirst(){
        return $this->hasOne(Doc1Type::class,'id','doc1_type_id');
    }
    public function getDocNameSecond(){
        return $this->hasOne(Doc2Type::class,'id','doc2_type_id');
    }
}
