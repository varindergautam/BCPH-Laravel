<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('id_cards', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('res_address')->nullable();
            $table->string('place_of_practice')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('issue_date')->nullable();
            $table->string('member_association')->nullable();
            $table->string('enrolment_date')->nullable();
            $table->string('enrolment_number')->nullable();
            $table->string('enrolment_year')->nullable();
            $table->string('card_number')->nullable();
            $table->string('sign')->nullable();
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
        Schema::dropIfExists('id_cards');
    }
}
