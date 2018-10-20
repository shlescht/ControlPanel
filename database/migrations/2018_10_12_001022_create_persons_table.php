<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('IDPn');
            $table->index('IDUr');
            $table->foreign('IDUr')->references('IDUr')->on('users')->onDelete('cascade');
            $table->index('IDRl');
            $table->foreign('IDRl')->references('IDRl')->on('roles')->onDelete('cascade');
            $table->string('p_name', 15);
            $table->string('ap_ma', 10);
            $table->string('ap_pa', 10);
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
        Schema::dropIfExists('persons');
    }
}
