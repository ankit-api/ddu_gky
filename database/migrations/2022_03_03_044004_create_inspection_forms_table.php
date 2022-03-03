<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspection_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_pia',50);
            $table->string('name_of_project',50)->nullable();
            $table->string('centre_incharge_name_mob',70);
            $table->string('mord_letter_no',50);
            $table->string('name_add_training_centre',255)->nullable();
            $table->string('inspected_by1',50);
            $table->string('pia_name',50);
            $table->date('date_of_ins1')->nullable();
            $table->string('inspected_by2',50);
            $table->string('srlm_name',50);
            $table->date('date_of_ins2')->nullable();
            $table->string('inspected_by3',50);
            $table->string('ctsa_name',50);
            $table->date('date_of_ins3')->nullable();
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
        Schema::dropIfExists('inspection_forms');
    }
}
