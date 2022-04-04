<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre', function (Blueprint $table) {
             $table->increments('id'); 
            $table->integer('pia_id')->unsigned()->foriegn(); 
            $table->foreign('pia_id')->references('id')->on('pia')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->foriegn(); 
            $table->foreign('project_id')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->string('centre_code',50);           
            $table->integer('state')->unsigned();
            $table->integer('district')->unsigned();
            $table->string('centre_name',100);
            $table->text('address');
            $table->string('centre_doc',50)->nullable();
            $table->integer('added_by')->unsigned()->nullable();
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
        Schema::dropIfExists('centre');
    }
}
