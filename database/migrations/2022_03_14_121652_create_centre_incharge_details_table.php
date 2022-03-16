<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreInchargeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_incharge_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('centre_id')->unsigned()->foriegn(); 
            $table->foreign('centre_id')->references('id')->on('centre')->onUpdate('cascade')->onDelete('cascade');
            // $table->string('category_of_staff',40);
            // $table->string('no_of_staff_at_beg',50);
            // $table->string('accretion',50);
            // $table->string('deletion',50);
            // $table->string('no_of_staff_at_closing',50);
            $table->string('centre_incharge_code',50);
            $table->string('name',50);
            $table->string('email',50);
            $table->string('contact',50);
            $table->text('address');
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->string('qualification',255);
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
        Schema::dropIfExists('centre_incharge_details');
    }
}
