<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterToSrlmMobiPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_srlm_mobi_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pia_id',40);
            $table->string('letter_to_srlm_file', 60);
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
        Schema::dropIfExists('letter_to_srlm_mobi_plans');
    }
}
