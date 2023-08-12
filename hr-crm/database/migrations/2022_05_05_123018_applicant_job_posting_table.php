<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicantJobPostingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_job_posting', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->nullable();
            $table->foreignId('job_posting_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('status')->default('Pendiente');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_job_posting');
    }
}
