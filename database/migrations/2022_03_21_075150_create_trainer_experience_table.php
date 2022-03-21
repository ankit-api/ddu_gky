<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trainer_id',60);
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('company_name',70)->nullable();
            $table->string('start_designation',30);
            $table->string('last_designation',30);
            $table->string('last_salary_drawn',10)->nullable();
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
        Schema::dropIfExists('trainer_experience');
    }
}
