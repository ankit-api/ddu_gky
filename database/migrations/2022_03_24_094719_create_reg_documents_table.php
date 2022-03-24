<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('register_id')->unsigned()->foriegn(); 
            $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade'); 
      
            $table->integer('doc_type_id')->unsigned()->foriegn(); 
            $table->foreign('doc_type_id')->references('id')->on('doc_types')->onUpdate('cascade')->onDelete('cascade'); 

            $table->string('file',50);
            $table->integer('added_by')->unsigned()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            

             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_documents');
    }
}
