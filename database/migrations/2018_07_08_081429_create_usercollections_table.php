<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsercollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usercollections', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('collection_id');
            $table->tinyInteger('rated')->default(0);
            $table->tinyInteger('likes')->default(0);
            $table->tinyInteger('achivement01')->default(0);
            $table->tinyInteger('achivement02')->default(0);
            $table->tinyInteger('achivement03')->default(0);
            $table->tinyInteger('achivement04')->default(0);
            $table->tinyInteger('achivement05')->default(0);
            $table->tinyInteger('achivement06')->default(0);
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
        Schema::dropIfExists('usercollections');
    }
}
