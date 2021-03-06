<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPlacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_placements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->string('school_year');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('placement_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('placement_id')
            ->references('id')
            ->on('placements')
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
        Schema::dropIfExists('student_placements');
    }
}
