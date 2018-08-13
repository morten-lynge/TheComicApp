<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('main_image')->nullable();
            $table->string('main_caption')->nullable();
            $table->string('thumb')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('is_subcollection')->default(0);
            $table->string('parent_collection')->nullable();
            $table->tinyInteger('contain_subcollection')->default(0);
            $table->string('collection_type')->nullable();
            $table->tinyInteger('rare_collection')->default(0);
            $table->Integer('completed_collection')->default(0);
            $table->integer('average_popularity')->default(0);
            $table->integer('popularity_votes')->default(0);
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
        Schema::dropIfExists('collections');
    }
}
