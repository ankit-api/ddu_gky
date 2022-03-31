<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->unsigned()->foriegn(); 
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('user_code',50)->unique();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
