<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('player_id')->unsigned()->index()->nullable();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->string('coefficient')->nullable();
            $table->string('percent_fee')->nullable();
            $table->string('percent_gold_collector')->nullable();
            $table->bigInteger('relam_id')->unsigned()->index()->nullable();
            $table->foreign('relam_id')->references('id')->on('relams')->onDelete('cascade');
            $table->bigInteger('gold_count')->unsigned()->nullable();
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
        Schema::dropIfExists('gold');
    }
}
