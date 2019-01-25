<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrouteStrategiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroute_strategies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('enroute_id');
            $table->unsignedInteger('strategy_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('enroute_id')
            ->references('id')
            ->on('enroute')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('strategy_id')
            ->references('id')
            ->on('strategy')
            ->onDelete('restrict')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enroute_strategies');
    }
}
