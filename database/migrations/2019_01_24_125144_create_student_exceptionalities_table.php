<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentExceptionalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exceptionalities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exceptionality_id');
            $table->unsignedInteger('student_id');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('exceptionality_id')
            ->references('id')
            ->on('exceptionalities')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('student_id')
            ->references('id')
            ->on('students')
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
        Schema::dropIfExists('student_exceptionalities');
    }
}
