<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('residence_name')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('enrolment_no')->nullable();
            $table->string('enrolment_year')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('enrolment_date')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('bar_association')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('sign')->nullable();
            $table->string('enrolment_certificate')->nullable();
            $table->string('residence_certificate')->nullable();
            $table->string('form_status')->default(1);
            $table->string('remarks')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('insurances');
    }
}
