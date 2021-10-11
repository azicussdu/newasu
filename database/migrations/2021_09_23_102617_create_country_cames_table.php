<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryCamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_cames', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->string('namekk')->nullable();
            $table->string('nameru')->nullable();
            $table->string('nameen')->nullable();
            $table->integer('gbdfl_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_cames');
    }
}
