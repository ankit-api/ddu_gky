<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchLessonPlannerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_lesson_planner_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('batch_id')->unsigned()->foriegn();  
            $table->foreign('batch_id')->references('id')->on('batch_details')->onUpdate('cascade')->onDelete('cascade');    
            
            $table->enum('class_type', ['batch', 'section'])->default('batch');

            $table->integer('theory_classroom_no');
            $table->integer('it_lab_no');
            $table->integer('practical_lab_no');
            $table->integer('theory_cum_practical_lab_no');
            $table->integer('theory_cum_it_lab_no');
            $table->integer('it_cum_practical_lab_no');
           

            $table->integer('added_by')->unsigned()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_lesson_planner_details');
    }
}
