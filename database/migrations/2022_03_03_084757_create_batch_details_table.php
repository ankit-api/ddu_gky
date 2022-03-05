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
            $table->integer('incharge_id');
            $table->integer('trainer_id');
            $table->string('batch_code',50);
            $table->string('nature_of_training');
            $table->enum('mode_of_batch', ['fulltime', 'parttime','weekends'])->default('fulltime');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('freeze_date');
            $table->string('total_duration');
            $table->string('duration_per_day');
            $table->string('trade');
            $table->integer('no_of_student');
            $table->integer('no_of_female');
            $table->integer('no_of_male');
            $table->integer('no_of_transgender');
            $table->integer('no_of_sc');
            $table->integer('no_of_st');
            $table->integer('no_of_others');
            $table->integer('no_of_minorities');
            $table->integer('no_of_pwd');
            $table->integer('no_of_delisted');
            $table->integer('no_of_dropout');
            $table->enum('batch_summary_status',['enroll', 'freeze','complete'])->default('enroll');
            $table->enum('status',['active', 'inactive',])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->nullable();
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
