<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('incharge_id')->unsigned()->foriegn();  
            $table->foreign('incharge_id')->references('id')->on('centre_incharge_details')->onUpdate('cascade')->onDelete('cascade');       
            
            $table->integer('trainer_id')->unsigned()->foriegn();  
            $table->foreign('trainer_id')->references('id')->on('trainer_details')->onUpdate('cascade')->onDelete('cascade');       
            

            $table->string('batch_code',50);
            $table->enum('nature_of_training', ['fulltime', 'parttime','weekends'])->default('fulltime');
            $table->date('batch_start_date');
            $table->date('expec_batch_end_date');
            $table->date('batch_freeze_date')->nullable();
            $table->string('total_duration')->nullable();
            $table->string('duration_per_day');
            // $table->enum('batch_in_two_shift',['no', 'yes'])->default('no');
            // $table->string('start_time_shift1')->nullable();
            // $table->string('end_time_shift1')->nullable();
            // $table->string('start_time_shift2')->nullable();
            // $table->string('end_time_shift2')->nullable();
            // $table->enum('batch_split_for_same_training_centre',['no', 'yes'])->default('no');
            // $table->integer('no_of_stu_sec_a')->nullable();
            // $table->integer('no_of_stu_sec_b')->nullable();
            $table->enum('lesson_planner',['batch', 'section'])->default('batch');
            $table->enum('ojt_given',['no', 'yes'])->default('no');
            $table->string('ojt_start_date')->nullable();
            $table->integer('ojt_days')->nullable();
            $table->string('trade')->nullable();
            $table->integer('no_of_student')->nullable();
            $table->integer('no_of_female')->nullable();
            $table->integer('no_of_male')->nullable();
            $table->integer('no_of_transgender')->nullable();
            $table->integer('no_of_sc')->nullable();
            $table->integer('no_of_st')->nullable();
            $table->integer('no_of_others')->nullable();
            $table->integer('no_of_minorities')->nullable();
            $table->integer('no_of_pwd')->nullable();
            $table->integer('no_of_delisted')->nullable();
            $table->integer('no_of_dropout')->nullable();
            $table->enum('batch_summary_status',['enroll', 'freeze','complete'])->default('enroll');
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
        Schema::dropIfExists('batch_details');
    }
}
