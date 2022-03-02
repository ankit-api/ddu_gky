<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanAptitudeResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('can_aptitude_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_id',60);
            $table->string('marks',50);
            $table->string('result',30);
            $table->string('apt_ques_id',50);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('test_date')->nullable();
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
        Schema::dropIfExists('can_aptitude_results');
    }
}
