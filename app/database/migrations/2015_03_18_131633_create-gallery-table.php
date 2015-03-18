<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gallery', function($table){
            $table->increments('id');
            $table->integer('productId');
            $table->string('title', 100);
            $table->string('path', 255);
            $table->string('description');
            $table->index('productId');
            $table->engine = 'InnoDB';
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::dropIfExists('gallery');
	}

}
