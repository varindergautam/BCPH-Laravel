<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsInApplicationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_forms', function (Blueprint $table) {
            $table->string('plus_two_name_of_board')->before('plus_two_mark')->nullable();
            $table->string('plus_two_date_of_certificate')->before('plus_two_name_of_board')->nullable();
            $table->string('graduation_degree_college_name')->after('plus_two_name_of_board')->nullable();
            $table->string('graduation_degree_university_name')->after('graduation_degree_college_name')->nullable();
            $table->string('graduation_degree_session_period')->after('graduation_degree_university_name')->nullable();
            $table->string('graduation_degree_date_of_graduation')->after('graduation_degree_session_period')->nullable();
            $table->string('graduation_degree_marks')->after('graduation_degree_date_of_graduation')->nullable();
            $table->string('graduation_degree_course_name')->after('graduation_degree_marks')->nullable();
            $table->string('law_college_completion_date')->after('graduation_degree_course_name')->nullable();
            $table->string('law_college_issuance_date')->after('law_college_completion_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_forms', function (Blueprint $table) {
            //
        });
    }
}
