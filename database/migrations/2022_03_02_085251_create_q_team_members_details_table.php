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
            $table->string('centre_id',60);
            $table->string('employee_id',50);
            $table->string('name',50);
            $table->string('designation',50);
            $table->string('reporting_office',50);
            $table->string('email_id',50);
            $table->string('contact_no',50);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->nullable();
            $table->timestamp('updated_on')->nullable();
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
