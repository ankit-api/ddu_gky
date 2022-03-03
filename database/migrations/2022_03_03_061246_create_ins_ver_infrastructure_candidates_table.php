<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsVerInfrastructureCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_ver_infrastructure_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            $table->string('domain',50)->nullable();
            $table->string('batch_no',40);
            $table->string('starting_day',20)->nullable();
            $table->string('ending_day',20)->nullable();
            $table->date('date_of_last_inspection')->nullable();
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
        Schema::dropIfExists('ins_ver_infrastructure_candidates');
    }
}
