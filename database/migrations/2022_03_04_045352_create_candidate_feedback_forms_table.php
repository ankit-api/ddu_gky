<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateFeedbackFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_feedback_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('can_id',40);
            $table->integer('ans1');
            $table->integer('ans2');
            $table->integer('ans3');
            $table->integer('ans4');
            $table->integer('ans5');
            $table->integer('ans6');
            $table->integer('ans7');
            $table->integer('ans8');
            $table->integer('ans9');
            $table->integer('ans10');
            $table->integer('ans11');
            $table->integer('ans12');
            $table->integer('ans13');
            $table->text('suggestions');
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
        Schema::dropIfExists('candidate_feedback_forms');
    }
}
