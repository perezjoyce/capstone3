<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacementAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placement_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('placement_id');
            $table->unsignedInteger('area_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('placement_id')
            ->references('id')
            ->on('placements')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('area_id')
            ->references('id')
            ->on('areas')
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
        Schema::dropIfExists('placement_areas');
    }
}
