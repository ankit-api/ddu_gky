<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pia', function (Blueprint $table) {
            $table->increments('id'); 
            // $table->string('pia_code',50);
            $table->string('pia_name',100);
            $table->bigInteger('landline_no')->unique();
            $table->bigInteger('phone_no');
            $table->string('email',50);
            $table->text('address');
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
        Schema::dropIfExists('pia');
    }
}
