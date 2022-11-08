<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffidavitFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affidavit_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('born')->nullable();
            $table->string('district_name')->nullable();
            $table->string('bachelor_law_degree_college_name')->nullable();
            $table->string('place_name')->nullable();
            $table->string('type_born_in_oath')->nullable();
            $table->string('college_name_oath')->nullable();
            $table->string('place_name_oath')->nullable();
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
        Schema::dropIfExists('affidavit_forms');
    }
}
