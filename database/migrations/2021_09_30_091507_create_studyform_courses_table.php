<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyformCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyform_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('studyform_id')->nullable();
            $table->foreign('studyform_id')->references('id')->on('studyforms');
            $table->unsignedBigInteger('course_number')->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->unsignedBigInteger('credit')->nullable();
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
        Schema::dropIfExists('studyform_courses');
    }
}
