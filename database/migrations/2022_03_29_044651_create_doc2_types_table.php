<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoc2TypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc2_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doc1_type_id')->unsigned()->foriegn();
            $table->foreign('doc1_type_id')->references('id')->on('doc1_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('doc2_type_name',255);            
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
        Schema::dropIfExists('doc2_types');
    }
}
