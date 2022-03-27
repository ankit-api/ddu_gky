<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('san_order_no',30)->foriegn();
            $table->foreign('san_order_no')->references('sanction_order_no')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('category_type', ['Sanctioned', 'Proposed'])->default('Sanctioned');
            $table->integer('target_no')->unsigned();
            $table->integer('sc_no')->unsigned();
            $table->integer('st_no')->unsigned();
            $table->integer('others_no')->unsigned();
            $table->integer('minorities_no')->unsigned();
            $table->integer('women_no')->unsigned();
            $table->integer('placement_no')->unsigned();
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
        Schema::dropIfExists('category_types');
    }
}
