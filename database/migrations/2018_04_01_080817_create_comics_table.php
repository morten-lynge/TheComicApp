<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('frontpage')->nullable();
            $table->string('serie')->nullable();
            $table->string('sub_serie')->nullable();
            $table->string('collection')->nullable();
            $table->integer('serienumber')->nullable();
            $table->longText('resume')->nullable();            ;
            $table->string('writer')->nullable();
            $table->string('additional_writers')->nullable();
            $table->string('artist')->nullable();
            $table->string('additional_artists')->nullable();
            $table->string('translator')->nullable();
            $table->string('letterer')->nullable();
            $table->string('pages')->nullable();
            $table->string('size')->nullable();
            $table->string('cover')->nullable();
            $table->string('coloring')->nullable();
            $table->string('major_release')->nullable();
            $table->string('minor_release')->nullable();
            $table->string('publisher')->nullable();
            $table->string('publishing_year')->nullable();
            $table->tinyInteger('rare_item')->default(0);
            $table->Integer('registrered_items')->default(0);
            $table->tinyInteger('average_condition')->default(0);
            $table->Integer('votes')->default(0);
            $table->Integer('total_likes')->default(0);
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
        Schema::dropIfExists('comics');
    }
}
