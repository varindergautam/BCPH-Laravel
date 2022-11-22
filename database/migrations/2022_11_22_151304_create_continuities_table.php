<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContinuitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continuities', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('place_of_practice')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('upload_application')->nullable();
            $table->string('sign')->nullable();
            $table->string('enrolment_certificate')->nullable();
            $table->string('lllb_degree')->nullable();
            $table->string('certificate_of_practice')->nullable();
            $table->string('profile_pic')->nullable();
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
        Schema::dropIfExists('continuities');
    }
}
