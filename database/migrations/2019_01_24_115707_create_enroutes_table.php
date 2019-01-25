<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroutes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('objective');
            $table->unsignedInteger('terminal_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('terminal_id')
            ->references('id')
            ->on('terminals')
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
        Schema::dropIfExists('enroutes');
    }
}
