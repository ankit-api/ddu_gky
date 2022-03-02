<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOjtPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ojt_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('centre_id',50);
            $table->string('batch_no',40)->nullable();
            $table->string('name_of_domain',30);
            $table->date('training_start_date')->nullable();
            $table->date('training_end_date')->nullable();
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
        Schema::dropIfExists('ojt_plans');
    }
}
