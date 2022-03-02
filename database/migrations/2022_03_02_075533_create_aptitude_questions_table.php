<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAptitudeQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptitude_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ques_statement',255);
            $table->string('opt1',30);
            $table->string('opt2',30);
            $table->string('opt3',30);
            $table->string('opt4',30);
            $table->string('correct_ans',30);
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
        Schema::dropIfExists('aptitude_questions');
    }
}
