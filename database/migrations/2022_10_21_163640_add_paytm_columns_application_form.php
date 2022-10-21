<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaytmColumnsApplicationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('application_forms', function (Blueprint $table) {
            $table->string('tatkaal_fees')->nullable();
            $table->tinyInteger('paytm_status')->nullable()->default(0)->comment('0 failed 1 success 2 processing');
            $table->string('paytm_order_id');
            $table->string('paytm_transaction_id')->default(0);
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
