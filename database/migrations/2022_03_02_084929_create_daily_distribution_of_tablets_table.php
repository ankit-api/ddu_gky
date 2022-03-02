<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyDistributionOfTabletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_distribution_of_tablets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',60);
            $table->string('tablet_code',40);
            $table->string('candidate_name',50);
            $table->string('receiving_sign',50);
            $table->string('returning_sign',50);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('distributed_date')->nullable();
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
        Schema::dropIfExists('daily_distribution_of_tablets');
    }
}
