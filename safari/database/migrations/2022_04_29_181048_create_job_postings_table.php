<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name');
            $table->string('company_name');
            // $table->string('description');
            $table->string('location');
            $table->string('hiring_modality');
            $table->string('work_modality');
            $table->string('english_level');
            $table->string('seniority');
            $table->json('requirements');
            $table->string('currency');
            // $table->payment_range();
            $table->string('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_postings');
    }
}
