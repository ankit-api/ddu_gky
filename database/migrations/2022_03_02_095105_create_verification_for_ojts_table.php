<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationForOjtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_for_ojts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ojt_id',50);
            $table->string('can_id',40)->nullable();
            $table->string('month',40);
            $table->string('trainee_name',40);
            $table->string('father_name',40);
            $table->string('block',40);
            $table->string('district',40);
            $table->string('centre_name',40);
            $table->date('training_start_date')->nullable();
            $table->date('training_end_date')->nullable();
            $table->date('ojt_start_date')->nullable();
            $table->date('ojt_end_date')->nullable();
            $table->date('date_of_ver')->nullable();
            $table->string('verification_time',40);
            $table->enum('candidate_available', ['yes', 'no'])->default('yes');
            $table->string('reason',40);
            $table->date('que_start_ojt_date')->nullable();
            $table->string('que_activity',40);
            $table->string('que_last_activity',40);
            $table->string('que_field_level',40);
            $table->string('que_supervisor_interact',40);
            $table->string('que_instrument',40);
            $table->string('que_material',40);
            $table->string('que_stipend_eligible',10);
            $table->string('que_stipend_getting',10);
            $table->enum('que_boarding_provided', ['yes', 'no'])->default('yes');
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
        Schema::dropIfExists('verification_for_ojts');
    }
}
