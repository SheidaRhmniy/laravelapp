<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('studentid');
            $table->unsignedBiginteger('classid');
            $table->foreign('studentid')
            ->references('id')->on('students')->onDelete('cascade');
            $table->foreign('classid')
            ->references('id')->on('classes')->onDelete('cascade');
            $table->integer('grade');
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
        Schema::dropIfExists('class_students');
    }
}
