<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',60);
            $table->string('name',50);
            $table->string('domain',50)->nullable();
            $table->string('additional_skill',50)->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->timestamp('dob')->nullable();
            $table->string('category',20);
            $table->string('father_name',50)->nullable();
            $table->enum('physical_disability', ['yes', 'no'])->default('no');
            $table->string('disability_name',50);
            $table->bigInteger('aadhaar_no')->nullable();
            $table->string('other_info',250)->nullable();
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
        Schema::dropIfExists('trainer_profiles');
    }
}
