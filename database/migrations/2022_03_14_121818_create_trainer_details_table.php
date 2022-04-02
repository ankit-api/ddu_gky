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
            $table->string('trainer_code',50);
            
            $table->integer('centre_id')->unsigned()->foriegn(); 
            $table->foreign('centre_id')->references('id')->on('centre')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->foriegn(); 
            $table->foreign('project_id')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');

            $table->string('name',50);
            $table->string('relation',50)->nullable();
            $table->string('relative_name',100)->nullable();
            $table->string('domain',50)->nullable();
            $table->string('additional_skill',50)->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->timestamp('dob')->nullable();
            $table->string('category',20);
            $table->enum('pwd', ['yes', 'no'])->default('no');
            $table->string('pwd_type',50);
            $table->bigInteger('aadhaar_no')->nullable();
            $table->text('other_info')->nullable();
            $table->enum('type_of_engagement', ['fulltime', 'parttime','weekends'])->default('fulltime');
            $table->enum('training_type', ['primary', 'secondary'])->default('primary');
            $table->string('photo',50)->nullable();
            $table->string('signature',50)->nullable();
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
        Schema::dropIfExists('trainer_details');
    }
}
