<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score');
            $table->longText('recommendations');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('assessment_id');
            $table->date('assessment_date');
            $table->timestamps();

            //FOREIGN KEYS
            $table->foreign('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('assessment_id')
            ->references('id')
            ->on('assessments')
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
        Schema::dropIfExists('student_assessments');
    }
}
