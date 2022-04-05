<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_i_s', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('mis_code',50);
            $table->integer('project_id')->unsigned()->foriegn(); 
            $table->foreign('project_id')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->string('mis_type',20);
            $table->string('name',100);
            $table->bigInteger('phone_no');
            $table->string('email',50);
            $table->text('address');
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
        Schema::dropIfExists('m_i_s');
    }
}
