<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInApplicationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_forms', function (Blueprint $table) {
            $table->string('appointment_holds_remarks')->nullable()->after('appointment_holds');
            $table->string('business_or_profession_remark')->nullable()->after('business_or_profession');
            $table->string('criminal_court')->nullable()->after('business_or_profession_remark');
            $table->string('criminal_court_remark')->nullable()->after('criminal_court');
            $table->string('criminal_proceeding_againest_applicant_remark')->nullable()->after('criminal_court_remark');
            $table->string('suspension_type_remark')->nullable()->after('suspension_type');
            $table->string('declared_insolvent_type_remark')->nullable()->after('declared_insolvent_type');
            $table->string('already_apply_for_enrollment_remark')->nullable()->after('already_apply_for_enrollment');
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
