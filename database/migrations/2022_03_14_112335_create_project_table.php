<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('pia_id')->unsigned()->foriegn(); 
            $table->foreign('pia_id')->references('id')->on('pia')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name',100);
            $table->string('duration',20);
            $table->integer('state')->unsigned();
            $table->integer('district')->unsigned();
            $table->text('description');
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
        Schema::dropIfExists('project');
    }
}
