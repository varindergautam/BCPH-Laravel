<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('permanent_address')->nullable();
            $table->string('university_name')->nullable();
            $table->string('which_univeristy')->nullable();
            $table->text('which_univeristy_remarks')->nullable();
            $table->date('date_of_law_degree')->nullable();
            $table->string('plus_two_mark')->nullable();
            $table->string('graduate_before_admission')->nullable();
            $table->string('college_university_name')->nullable();
            $table->string('no_of_years')->nullable();
            $table->date('college_pass_date')->nullable();
            $table->string('english_compulsory')->nullable();
            $table->text('correspondence_address')->nullable();
            $table->string('law_college_name')->nullable();
            $table->date('law_college_join_date')->nullable();
            $table->string('law_college_duration_year')->nullable();
            $table->date('law_college_passed')->nullable();
            $table->string('name_of_degree_obtained')->nullable();
            $table->string('medium_instruction')->nullable();
            $table->string('private_study_duration_year')->nullable();
            $table->string('city_for_pratice_after_enrollment')->nullable();
            $table->string('appointment_holds')->nullable();
            $table->string('business_or_profession')->nullable();
            $table->string('criminal_proceeding_againest_applicant')->nullable();
            $table->string('suspension_type')->nullable();
            $table->string('declared_insolvent_type')->nullable();
            $table->string('already_apply_for_enrollment')->nullable();
            $table->string('total_pay')->nullable();
            $table->string('razorpay_order_id')->nullable();
            $table->string('razorpay_payment_id')->nullable();
            $table->string('razorpay_signature')->nullable();
            $table->enum('payment_status', [0,1])->default(0)->comment('0 pending 1 complete')->nullable();

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
        Schema::dropIfExists('application_forms');
    }
}
