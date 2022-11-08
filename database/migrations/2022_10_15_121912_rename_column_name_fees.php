<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnNameFees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fees', function (Blueprint $table) {
            $table->renameColumn('fee_1', 'basic_fees');
            $table->renameColumn('fee_2', 'bar_council_fees');
            $table->renameColumn('fee_3', 'building_fees');
            $table->string('advocate_welfare_fees')->nullable();
            $table->string('benevolent_fees')->nullable();
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
