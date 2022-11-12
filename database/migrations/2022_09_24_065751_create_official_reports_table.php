<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('official_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('study_gap')->nullable();
            $table->string('criminal_procedding')->nullable();
            $table->string('above_21_years')->nullable();
            $table->string('ex_service_men')->nullable();
            $table->string('foreign_law')->nullable();
            $table->string('date_of_completion')->nullable();
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
        Schema::dropIfExists('official_reports');
    }
}
