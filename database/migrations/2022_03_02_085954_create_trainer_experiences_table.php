<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerExperiencesTable extends Migration
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
        Schema::dropIfExists('trainer_experiences');
    }
}
