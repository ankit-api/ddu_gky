<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc2Type extends Model
{
    use HasFactory;

    protected $table = 'doc2_types';
    public $timestamps = false;
}
