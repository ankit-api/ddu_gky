<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('pia_id')->unsigned()->foriegn(); 
            $table->foreign('pia_id')->references('id')->on('pia')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('scheme_id')->unsigned()->foriegn();
            $table->foreign('scheme_id')->references('id')->on('schemes')->onUpdate('cascade')->onDelete('cascade');
            $table->string('sanction_order_no',30);
            $table->string('name',30);
            $table->date('sanction_date');
            $table->string('proposal_code',30);
            $table->date('pac_date');
            $table->integer('state')->unsigned();
            $table->integer('district')->unsigned();
            $table->string('project_duration',20);
            $table->integer('total_target')->unsigned();
            $table->integer('placement_target')->unsigned();
            $table->integer('project_cost')->unsigned();
            $table->integer('central_share')->unsigned();
            $table->integer('state_share')->unsigned();
            $table->string('mpr_project_id', 30)->nullable();
            $table->enum('consortium', ['yes', 'no'])->default('no');
            $table->string('consortium_prn',30)->nullable();
            $table->string('project_doc',50)->nullable();
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
        Schema::dropIfExists('project');
    }
}
