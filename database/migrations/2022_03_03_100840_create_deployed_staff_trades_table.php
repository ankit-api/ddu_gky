<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeployedStaffTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deployed_staff_trades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centre_id');
            $table->string('name_of_trade', 40);
            $table->string('name', 40);
            $table->string('high_qualification', 40);
            $table->string('total_exp', 40);
            $table->date('date_of_joining')->nullable();
            $table->enum('tot', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('deployed_staff_trades');
    }
}
