<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclarationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('declaration_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('law_college_name')->nullable();
            $table->string('law_university_name')->nullable();
            $table->string('law_affiliated_university')->nullable();
            $table->date('date_of_completion')->nullable();
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
        Schema::dropIfExists('declaration_forms');
    }
}
