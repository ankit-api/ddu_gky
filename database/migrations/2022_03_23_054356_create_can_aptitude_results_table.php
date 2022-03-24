<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanAptitudeResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('can_aptitude_results', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('register_id')->unsigned()->foriegn();  
            $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade');       
            
            $table->string('marks',3);
            $table->enum('result', ['wait','pass', 'fail'])->default('wait');
            $table->integer('added_by')->unsigned()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('test_date')->nullable();
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
        Schema::dropIfExists('can_aptitude_results');
    }
}
