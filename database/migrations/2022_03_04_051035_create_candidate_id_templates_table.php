<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateIdTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_id_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_id',40);
            $table->string('id_file',50);
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
        Schema::dropIfExists('candidate_id_templates');
    }
}
