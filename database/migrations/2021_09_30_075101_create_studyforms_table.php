<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyforms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('degree_type_id')->nullable();
            $table->foreign('degree_type_id')->references('id')->on('degree_types');
            $table->unsignedBigInteger('base_education_id')->nullable();
            $table->foreign('base_education_id')->references('id')->on('base_educations');
            $table->string('namekk')->nullable();
            $table->string('nameru')->nullable();
            $table->string('nameen')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('studyforms');
    }
}
