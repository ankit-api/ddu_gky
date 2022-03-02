<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOjtPlanForBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ojt_plan_for_batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ojt_id',50);
            $table->string('batch_no',40)->nullable();
            $table->string('domain_name',40);
            $table->date('training_start_date')->nullable();
            $table->date('training_end_date')->nullable();
            $table->text('com_name_and_address');
            $table->string('department',40)->nullable();
            $table->string('supervisor_name_and_contact_no',60);
            $table->integer('no_of_candidates_required');
            $table->string('nature_of_ojt',40)->nullable();
            $table->string('stipend',40)->nullable();
            $table->string('duration',40)->nullable();
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
        Schema::dropIfExists('ojt_plan_for_batches');
    }
}
