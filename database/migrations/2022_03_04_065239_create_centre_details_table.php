<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('center_code',50);
            $table->string('centre_name',100);            
            $table->text('address');
            $table->string('state',30);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('center_details');
    }
}
