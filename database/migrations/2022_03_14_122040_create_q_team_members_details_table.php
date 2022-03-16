<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQTeamMembersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_team_members_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pia_id')->unsigned()->foriegn(); 
            $table->foreign('pia_id')->references('id')->on('pia')->onUpdate('cascade')->onDelete('cascade');
            $table->string('qteam_member_code',50);
            $table->string('name',50);
            $table->string('email',50);
            $table->string('contact',50);
            $table->text('address');
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->enum('designation', ['head', 'member'])->default('member');
            $table->string('reporting_office',50);       
            $table->integer('added_by')->unsigned()->nullable(); 
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->nullable();
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
        Schema::dropIfExists('q_team_members_details');
    }
}
