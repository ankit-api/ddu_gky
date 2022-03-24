<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchLessonPlanner extends Model
{
    use HasFactory;

    protected $table = 'batch_lesson_planner_details';
    public $timestamps = false;
}
