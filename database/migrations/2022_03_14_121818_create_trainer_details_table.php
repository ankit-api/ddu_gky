<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',60);
            $table->string('trainer_code',50);
            $table->string('name',50);
            $table->string('domain',50)->nullable();
            $table->string('additional_skill',50)->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->timestamp('dob')->nullable();
            $table->string('category',20);
            $table->string('father_name',50)->nullable();
            $table->enum('pwd', ['yes', 'no'])->default('no');
            $table->string('pwd_type',50);
            $table->bigInteger('aadhaar_no')->nullable();
            $table->text('other_info')->nullable();
            $table->enum('type_of_engagement', ['fulltime', 'parttime','weekends'])->default('fulltime');
            $table->enum('training_type', ['primary', 'secondary'])->default('primary');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->nullable();
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
        Schema::dropIfExists('trainer_details');
    }
}
