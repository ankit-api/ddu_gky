<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trainer_id',60);
            $table->string('qualification',50);
            $table->string('qualification_details',50);
            $table->string('board',50)->nullable();
            $table->string('subject',50)->nullable();
            $table->string('year_of_passing',4);
            $table->string('percentage',10)->nullable();
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
        Schema::dropIfExists('trainer_education');
    }
}
