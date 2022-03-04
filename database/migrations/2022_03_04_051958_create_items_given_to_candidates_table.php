<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsGivenToCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_given_to_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('candidate_id',40);
            $table->string('candidate_name',50);
            $table->string('batch_no',40);
            $table->string('trade',50);
            $table->enum('id_card', ['yes', 'no'])->default('yes');
            $table->enum('uniform', ['yes', 'no'])->default('yes');
            $table->enum('tlm', ['yes', 'no'])->default('yes');
            $table->enum('entitlement_list', ['yes', 'no'])->default('yes');
            $table->enum('training_plan', ['yes', 'no'])->default('yes');
            $table->enum('list_of_contacts', ['yes', 'no'])->default('yes');
            $table->enum('info_of_trade', ['yes', 'no'])->default('yes');
            $table->enum('dos_and_donts_list', ['yes', 'no'])->default('yes');
            $table->string('signature',20);
            $table->text('remarks');
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
        Schema::dropIfExists('items_given_to_candidates');
    }
}
