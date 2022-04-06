<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentConsent extends Model
{
    use HasFactory;
    protected $table = 'parent_consent_forms';
    public $timestamps = false;
}
