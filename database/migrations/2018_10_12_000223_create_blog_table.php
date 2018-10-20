<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('IDBg');
            $table->index('IDPn');
            $table->foreign('IDPn')->references('IDPn')->on('persons')->onDelete('cascade');
            $table->string('img_1', 50);
            $table->string('img_2', 50);
            $table->string('img_3', 50);
            $table->text('bBody');
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
        Schema::dropIfExists('blog');
    }
}
