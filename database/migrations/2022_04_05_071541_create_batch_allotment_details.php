<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchAllotmentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_allotment_details', function (Blueprint $table) {
            $table->increments('id');   
            $table->integer('centre_id')->unsigned()->foriegn();
            $table->foreign('centre_id')->references('id')->on('centre')->onUpdate('cascade')->onDelete('cascade');            
            $table->integer('register_id')->unsigned()->foriegn();
            $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade');           
            $table->integer('admission_id')->unsigned()->foriegn();
            $table->foreign('admission_id')->references('id')->on('admission_details')->onUpdate('cascade')->onDelete('cascade');           
            $table->integer('batch_id')->unsigned()->foriegn();
            $table->foreign('batch_id')->references('id')->on('batch_details')->onUpdate('cascade')->onDelete('cascade');           
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_allotment_details');
    }
}
