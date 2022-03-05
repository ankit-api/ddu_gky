<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('register_id')->unsigned()->foriegn(); 
            $table->integer('centre_id')->unsigned()->foriegn(); 
            $table->integer('batch_id')->unsigned()->foriegn(); 
            $table->integer('family_id')->unsigned()->foriegn(); 
            $table->integer('aptitude_id')->unsigned()->foriegn(); 
            $table->integer('state_id');
            $table->string('student_code',50);
            $table->string('name',50);
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->date('dob');
            $table->integer('age');
            $table->string('highest_qualification',70);
            $table->integer('contact');
            $table->integer('alternate_contact')->nullable();
            $table->string('email',200);
            $table->string('alternate_email',200)->nullable();
            $table->string('village',150);
            $table->text('address');
            $table->text('permanent_address')->nullable();
            $table->enum('category', ['general', 'sc', 'st','obc'])->default('general');
            $table->enum('pwd', ['no', 'yes'])->default('no');
            $table->string('pwd_type',200)->nullable();
            $table->enum('minority', ['no', 'yes'])->default('no');
            $table->string('religion',50);
            $table->string('other_group',200);
            $table->integer('sess_no')->nullable();
            $table->integer('bpl_ration_card_no')->nullable();
            $table->integer('job_card_no')->nullable();
            $table->integer('rsby_card_no')->nullable();
            $table->integer('aay_ration_card')->nullable();
            $table->integer('annual_income')->nullable();
            $table->integer('aay_ration_card')->nullable();
            $table->enum('is_candidate_a_family_memmber_of_sgh_member', ['no', 'yes'])->default('no');
            $table->string('sgh_name',200)->nullable();
            $table->string('sgh_id',200)->nullable();
            $table->string('name_of_sgh_member',200)->nullable();
           
      
            $table->foreign('centre_id')->references('id')->on('centre_details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade');            
            $table->foreignId('batch_id')->references('id')->on('batch_details')->onDelete('cascade');
            $table->foreignId('family_id')->references('id')->on('family_details')->onDelete('cascade');
            $table->foreignId('aptitude_id')->references('id')->on('can_aptitude_results')->onDelete('cascade');

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamp('created_on')->useCurrent();
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
        Schema::dropIfExists('student_details');
    }
}
