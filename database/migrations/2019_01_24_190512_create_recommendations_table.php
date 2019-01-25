<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('student_services_id');
            $table->unsignedInteger('student_placements_id');
            $table->date('date_presented');
            $table->unsignedInteger('status_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('student_services_id')
            ->references('id')
            ->on('student_services')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('student_placements_id')
            ->references('id')
            ->on('student_placements')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('status_id')
            ->references('id')
            ->on('statuses')
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
        Schema::dropIfExists('recommendations');
    }
}
