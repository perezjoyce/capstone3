<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('status_id');
            $table->timestamps();

            //FOREIGN KEY
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
        Schema::dropIfExists('student_services');
    }
}
