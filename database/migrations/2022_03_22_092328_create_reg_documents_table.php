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
            $table->string('type_of_document',40);
            $table->string('file',50);
            $table->integer('added_by')->unsigned()->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
            $table->timestamp('updated_on')->useCurrent();
            $table->softDeletes();

            $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade'); 
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
