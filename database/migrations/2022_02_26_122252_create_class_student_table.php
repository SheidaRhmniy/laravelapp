<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_student', function (Blueprint $table) {
            $table->bigIncrements('csid');
            $table->unsignedBigInteger('studentid');
            $table->unsignedBiginteger('classid');
            $table->foreign('studentid')
            ->references('studentid')->on('students')->onDelete('cascade');
            $table->foreign('classid')
            ->references('classid')->on('classes')->onDelete('cascade');
            $table->integer('grade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_student');
    }
}
