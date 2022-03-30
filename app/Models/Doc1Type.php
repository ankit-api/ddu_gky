<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc1Type extends Model
{
    use HasFactory;

    protected $table = 'doc1_types';
    public $timestamps = false;
}
