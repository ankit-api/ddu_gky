<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('admission_id')->unsigned()->foriegn(); 
            $table->foreign('admission_id')->references('id')->on('admission_details')->onUpdate('cascade')->onDelete('cascade'); 
      

            $table->string('name',50);  
            $table->string('relation',30);
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->integer('age');
            $table->string('marital_status', 30)->nullable();
            $table->enum('is_earning', ['yes', 'no'])->default('no');
            $table->string('occupation',50);
            $table->enum('is_shg_member', ['yes', 'no'])->default('no');
            $table->string('shg_id',25)->nullable();
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
        Schema::dropIfExists('family_details');
    }
}
