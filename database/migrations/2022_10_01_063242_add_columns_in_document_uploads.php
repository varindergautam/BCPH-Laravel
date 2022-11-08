<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInDocumentUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('document_uploads', function (Blueprint $table) {
            $table->string('obtain_mark_of_plus_two')->nullable()->after('total_mark_of_plus_two');
            $table->string('plus_two_percentage')->nullable()->after('obtain_mark_of_plus_two');
            $table->string('graduation_percentage')->nullable()->after('obtain_mark_of_gradutation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document_uploads', function (Blueprint $table) {
            //
        });
    }
}
