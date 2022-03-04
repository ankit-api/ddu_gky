<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationAndAssessmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_and_assessment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('test_type', ['monthly', 'quiz']);
            $table->string('subject',50);
            $table->date('date_of_test')->nullable();
            $table->string('avg_performance',30);
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
        Schema::dropIfExists('evaluation_and_assessment_details');
    }
}
