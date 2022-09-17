<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_uploads', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('provisional_certificate_of_llb')->nullable();
            $table->string('attendance_certificate')->nullable();
            $table->string('dmc_of_llb')->nullable();
            $table->string('matriculation_certificate')->nullable();
            $table->string('total_mark_of_plus_two')->nullable();
            $table->string('obtain_mark_of_tenth')->nullable();
            $table->string('plus_two_certificate')->nullable();
            $table->string('total_mark_of_gradutation')->nullable();
            $table->string('obtain_mark_of_gradutation')->nullable();
            $table->string('all_dmc_certificate_of_llb')->nullable();
            $table->string('affidavit_of_law_degree')->nullable();
            $table->string('affidavit_of_stamp_duty')->nullable();
            $table->string('affidavit_of_aibe')->nullable();
            $table->string('service_certificate')->nullable();
            $table->string('document_of_column_12_13_14')->nullable();
            $table->string('gap_affidavit')->nullable();
            $table->string('additional_affidavit')->nullable();
            $table->string('any_other_infomation')->nullable();
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
        Schema::dropIfExists('document_uploads');
    }
}
