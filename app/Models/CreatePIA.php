<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatePIA extends Model
{
    use HasFactory;

    protected $table = 'pia';
    public $timestamps = false;
}
