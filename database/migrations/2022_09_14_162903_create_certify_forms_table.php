<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertifyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certify_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('years')->nullable();
            $table->string('advocate_name')->nullable();
            $table->string('date')->nullable();
            $table->string('day')->nullable();
            $table->string('years_2')->nullable();
            $table->string('advocate_name_2')->nullable();
            $table->string('date_2')->nullable();
            $table->string('day_2')->nullable();
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
        Schema::dropIfExists('certify_forms');
    }
}
