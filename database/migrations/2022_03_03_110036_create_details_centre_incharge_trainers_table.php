<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsCentreInchargeTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_centre_incharge_trainers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',40);
            $table->string('category_of_staff', 40);
            $table->integer('staffs_at_beg');
            $table->string('accretion',40);
            $table->string('deletion',40);
            $table->integer('staffs_at_end');
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
        Schema::dropIfExists('details_centre_incharge_trainers');
    }
}
