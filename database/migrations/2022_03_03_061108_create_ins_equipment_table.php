<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_equipment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            $table->string('sub_head',50)->nullable();
            $table->string('item_no',20);
            $table->string('modification_made',50)->nullable();
            $table->enum('asp_standard', ['yes', 'no'])->default('yes');
            $table->string('incharge_remarks',50)->nullable();
            $table->string('official_remarks',50)->nullable();
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
        Schema::dropIfExists('ins_equipment');
    }
}
