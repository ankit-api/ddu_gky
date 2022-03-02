<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreInchargeAndTrainerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_incharge_and_trainer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',60);
            $table->string('category_of_staff',40);
            $table->string('no_of_staff_at_beg',50);
            $table->string('accretion',50);
            $table->string('deletion',50);
            $table->string('no_of_staff_at_closing',50);
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
        Schema::dropIfExists('centre_incharge_and_trainer_details');
    }
}
