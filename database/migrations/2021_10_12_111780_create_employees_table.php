<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('old_lastname')->nullable();
            $table->enum('status', ['active','inactive'])->default('active');
            $table->string('iin')->nullable();
            $table->date('birthdate')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->unsignedBigInteger('family_status_id')->nullable();
            $table->foreign('family_status_id')->references('id')->on('family_statuses');
            $table->unsignedBigInteger('nationality_id')->nullable();
            $table->foreign('nationality_id')->references('id')->on('nationalities');
            $table->unsignedBigInteger('citizenship_id')->nullable();
            $table->foreign('citizenship_id')->references('id')->on('citizenships');
            $table->unsignedBigInteger('region_id')->nullable();
            $table->foreign('region_id')->references('id')->on('all_regions');
            $table->string('living_address')->nullable();
            $table->unsignedBigInteger('identity_document_id')->nullable();
            $table->foreign('identity_document_id')->references('id')->on('identity_documents');
            $table->string('doc_number')->nullable();
            $table->string('doc_ser')->nullable();
            $table->date('doc_give_date')->nullable();
            $table->date('doc_end_date')->nullable();
            $table->unsignedBigInteger('doc_organ_id')->nullable();
            $table->foreign('doc_organ_id')->references('id')->on('sel_identity_documents');
            $table->string('home_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('kkson_section_id')->nullable();
            $table->foreign('kkson_section_id')->references('id')->on('kkson_sections');
            $table->unsignedBigInteger('scientificdegree_id')->nullable();
            $table->foreign('scientificdegree_id')->references('id')->on('scientificdegrees');
            $table->unsignedBigInteger('academicstatus_id')->nullable();
            $table->foreign('academicstatus_id')->references('id')->on('academicstatuses');
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
        Schema::dropIfExists('employees');
    }
}
