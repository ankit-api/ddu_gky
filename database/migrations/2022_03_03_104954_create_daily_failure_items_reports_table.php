<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyFailureItemsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_failure_items_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_equipment',70);
            $table->enum('available_at', ['centre', 'residential'])->default('centre');
            $table->enum('item_status', ['damaged', 'repaired'])->default('damaged');
            $table->date('repaired_at')->nullable();
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
        Schema::dropIfExists('daily_failure_items_reports');
    }
}
