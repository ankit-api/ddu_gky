<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_details', function (Blueprint $table) {
            $table->increments('id');  
            $table->integer('centre_id')->unsigned()->foriegn(); 
            $table->foreign('centre_id')->references('id')->on('centre')->onUpdate('cascade')->onDelete('cascade');
          
            $table->integer('register_id')->unsigned()->foriegn(); 
            // $table->integer('aptitude_id')->unsigned()->foriegn(); 

            
           $table->foreign('register_id')->references('id')->on('on_field_registration_of_candidates')->onUpdate('cascade')->onDelete('cascade');
           
            // $table->foreign('aptitude_id')->references('id')->on('can_aptitude_results')->onUpdate('cascade')->onDelete('cascade');

            // $table->integer('state_id');
            $table->string('name',50);
            $table->string('father_husband_name',50);
            $table->string('mother_name',50);
            $table->enum('gender', ['male', 'female', 'others'])->default('male');
            $table->date('dob');
            $table->integer('age');
            $table->string('individual_identity_no',25);
            $table->string('highest_qualification',70);
            $table->bigInteger('contact');
            $table->bigInteger('alternate_contact')->nullable();
            $table->string('email',200)->nullable();
            $table->string('alternate_email',200)->nullable();
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->enum('category', ['gn', 'sc', 'st','ob','mn'])->default('gn');
            $table->enum('pwd', ['no', 'yes'])->default('no');
            $table->string('pwd_type',200)->nullable();
            $table->string('religion',50);
            $table->enum('other_group', ['no', 'yes'])->default('no');
            $table->string('other_group_type',200)->nullable();
            $table->string('sess_no',50)->nullable();
            $table->string('bpl_ration_card_no',50)->nullable();
            $table->string('job_card_no',50)->nullable();
            $table->string('rsby_card_no',50)->nullable();
            $table->string('aay_ration_card',50)->nullable();
            $table->string('annual_income',20)->nullable();
            $table->enum('is_candidate_a_family_member_of_shg_member', ['no', 'yes'])->default('no');
            $table->string('shg_name',200)->nullable();
            $table->string('shg_id',200)->nullable();
            $table->string('name_of_shg_member',200)->nullable();

            $table->string('family_head_name',200)->nullable();
            $table->string('family_head_highest_education',100)->nullable();
            $table->integer('family_annual_income')->nullable();
            $table->integer('no_of_family_member')->nullable();

            $table->string('trade',100);
            $table->string('allocated_trade',100);
            $table->text('comment');
            $table->string('candidate_doc',50);
            $table->enum('batch_enroll_status', ['unenroll', 'enroll'])->default('unenroll');
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
        Schema::dropIfExists('admission_details');
    }
}
