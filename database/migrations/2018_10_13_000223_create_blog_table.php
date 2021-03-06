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
            $table->integer('IDPn', false, true)->length(10);
            $table->string('img_1', 38);
            $table->string('img_2', 38);
            $table->string('img_3', 38);
            $table->boolean('acepted');
            $table->text('note');
            $table->string('Title', 15);
            $table->text('bBody');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('IDPn')->references('IDPn')->on('persons')->onDelete('cascade');
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
