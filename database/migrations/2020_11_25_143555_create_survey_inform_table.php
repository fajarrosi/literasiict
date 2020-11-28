<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyInformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_inform', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jns_kel');
            $table->string('umur');
            $table->string('ltr_pend');
            $table->string('pendptn');
            $table->string('lokasi');
            $table->string('jns_inds');
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
        Schema::dropIfExists('survey_inform');
    }
}
