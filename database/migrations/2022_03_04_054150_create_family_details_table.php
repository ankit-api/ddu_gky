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
            $table->string('name',50);  
            $table->string('relation',30);
            $table->enum('is_family_head', ['yes', 'no'])->default('no');
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->integer('age');
            $table->enum('is_married', ['yes', 'no'])->default('no');
            $table->enum('is_earning', ['yes', 'no'])->default('no');
            $table->string('occupation',50);
            $table->string('highest_qualification',50);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
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
        Schema::dropIfExists('family_details');
    }
}
