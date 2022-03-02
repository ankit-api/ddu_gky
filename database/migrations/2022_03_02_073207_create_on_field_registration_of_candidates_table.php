<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnFieldRegistrationOfCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_field_registration_of_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_id',60);
            $table->string('name',50);
            $table->string('location',30);
            $table->timestamp('date_of_mobilization')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->string('age',10);
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->string('category',20);
            $table->enum('pwd', ['yes', 'no'])->default('no');
            $table->enum('minority', ['yes', 'no'])->default('no');
            $table->string('high_edu',40)->nullable(true);
            $table->string('referring_stk',40)->nullable(true);
            $table->text('address')->nullable(true);
            $table->string('contact_details',100)->nullable(true);
            $table->string('certificate_id',25)->nullable(true);
            $table->enum('counselling_status', ['done', 'not done'])->default('not done');
            $table->enum('enrolled_status', ['yes', 'no'])->default('no');
            $table->string('signature_file',50)->nullable(true);
            $table->text('remarks')->nullable(true);
            $table->string('centre_id',50)->nullable(true);
            $table->string('mob_id',50)->nullable(true);
            $table->string('aptitude_id',50)->nullable(true);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->rememberToken();
            $table->timestamp('registered_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('on_field_registration_of_candidates');
    }
}
