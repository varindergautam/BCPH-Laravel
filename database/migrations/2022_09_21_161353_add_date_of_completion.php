<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateOfCompletion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_forms', function (Blueprint $table) {
            $table->string('date_of_completion')->nullable();
        });

        Schema::table('affidavit_forms', function (Blueprint $table) {
            $table->string('date_of_completion')->nullable();
        });

        Schema::table('certify_forms', function (Blueprint $table) {
            $table->string('date_of_completion')->nullable();
        });

        Schema::table('document_uploads', function (Blueprint $table) {
            $table->string('date_of_completion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
