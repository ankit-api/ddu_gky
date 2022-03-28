<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilizerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilizers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centre_id')->unsigned()->foriegn(); 
            $table->foreign('centre_id')->references('id')->on('centre')->onUpdate('cascade')->onDelete('cascade');
            $table->string('mob_id',80);
            $table->string('name',50);
            $table->string('email',50);
            $table->string('contact',50);
            $table->text('address');
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->string('photo',50)->nullable();
            $table->string('signature',50)->nullable();
            $table->integer('added_by')->unsigned()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->nullable();
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
        Schema::dropIfExists('mobilizer');
    }
}
