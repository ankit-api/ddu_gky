<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreStatusOf15DaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_status_of15_days', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',40);
            $table->string('name_of_equipment',50);
            $table->enum('available_at', ['centre', 'residential'])->default('centre');
            $table->string('cumulative_days_of_failure',10);
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
        Schema::dropIfExists('centre_status_of15_days');
    }
}
