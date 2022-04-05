<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchAllotment extends Model
{
    use HasFactory;

    protected $table = 'batch_allotment_details';
    public $timestamps = false;
}
