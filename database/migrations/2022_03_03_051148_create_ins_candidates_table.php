<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            // $table->foreign('ins_id')->references('id')->on('inspection_forms');
            $table->string('domain_no',50)->nullable();
            $table->string('batch_no',70);
            $table->date('training_end_date')->nullable();
            $table->string('can_name',255)->nullable();
            $table->enum('ass_com', ['yes', 'no', 'na'])->default('na');
            $table->enum('rec_cert', ['yes', 'no', 'na'])->default('na');
            $table->enum('placed', ['yes', 'no', 'na'])->default('na');
            $table->enum('got_offer_letter', ['yes', 'no', 'na'])->default('na');
            $table->enum('joined_job', ['yes', 'no', 'na'])->default('na');
            $table->enum('received_ddu_cert', ['yes', 'no', 'na'])->default('na');
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
        Schema::dropIfExists('ins_candidates');
    }
}
