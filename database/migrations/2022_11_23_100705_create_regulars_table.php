<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regulars', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('place_practice')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('cop_certificate')->nullable();
            $table->string('law_degree')->nullable();
            $table->string('upload_enrolment')->nullable();
            $table->string('sign')->nullable();
            $table->string('profile_pic')->nullable();
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
        Schema::dropIfExists('regulars');
    }
}
