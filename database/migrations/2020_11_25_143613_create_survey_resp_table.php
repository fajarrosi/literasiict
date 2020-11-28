<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyRespTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_resp', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('resp_id');
            $table->unsignedInteger('pert_id');
            $table->unsignedInteger('jwbn_id');
            $table->integer('jwbn');
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
        Schema::dropIfExists('survey_resp');
    }
}
