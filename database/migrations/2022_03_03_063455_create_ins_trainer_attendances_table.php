<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsTrainerAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_trainer_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            $table->integer('questions_no');
            $table->enum('it_skills', ['yes', 'no'])->default('no');
            $table->enum('soft_skills', ['yes', 'no'])->default('no');
            $table->enum('english_skills', ['yes', 'no'])->default('no');
            $table->enum('others', ['yes', 'no'])->default('no');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->nullable();
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
        Schema::dropIfExists('ins_trainer_attendances');
    }
}
