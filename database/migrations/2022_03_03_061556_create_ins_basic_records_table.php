<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsBasicRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_basic_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ins_id');
            $table->string('can_name',40)->nullable();
            $table->enum('add_form', ['yes', 'no'])->default('no');
            $table->enum('id_proof', ['yes', 'no'])->default('no');
            $table->enum('age_proof', ['yes', 'no'])->default('no');
            $table->enum('poor_proof', ['yes', 'no'])->default('no');
            $table->enum('category_proof', ['yes', 'no'])->default('no');
            $table->enum('minority_proof', ['yes', 'no'])->default('no');
            $table->enum('pwd_proof', ['yes', 'no'])->default('no');
            $table->enum('enrolment_app', ['yes', 'no'])->default('no');
            $table->enum('parent_consent_form', ['yes', 'no'])->default('no');
            $table->enum('others', ['yes', 'no'])->default('no');
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
        Schema::dropIfExists('ins_basic_records');
    }
}
