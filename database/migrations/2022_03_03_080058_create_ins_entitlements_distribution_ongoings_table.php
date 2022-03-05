<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsEntitlementsDistributionOngoingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_entitlements_distribution_ongoings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            $table->string('can_name', 40);
            $table->enum('ques1', ['yes', 'no'])->default('no');
            $table->enum('ques2', ['yes', 'no'])->default('no');
            $table->enum('ques3', ['yes', 'no'])->default('no');
            $table->enum('ques4', ['yes', 'no'])->default('no');
            $table->enum('ques5', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('ins_entitlements_distribution_ongoings');
    }
}
