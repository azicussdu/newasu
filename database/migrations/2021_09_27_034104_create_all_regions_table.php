<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_regions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('namekk')->nullable();
            $table->string('nameru')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('step')->nullable();
            $table->foreign('parent_id')->references('id')->on('all_regions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_regions');
    }
}
