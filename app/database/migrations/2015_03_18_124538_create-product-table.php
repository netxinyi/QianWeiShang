<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

//    色系
//    品种
//    价格
//    伸长
//    父系品种
//    母系品种
//    显性基因
//    隐性基因
//    出生日期
//    年龄
//    是否已售
//    描述


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function($table){
            $table->increments('id');
            $table->string('code', 20)->unique();
            $table->string('title', 255);
            $table->decimal('price', 10,2)->unsigned();
            $table->boolean('sold');
            $table->string('varietie', 20);
            $table->string('faVarietie', 20);
            $table->string('maVarietie', 20);
            $table->date('birthday');
            $table->string('dominantGene',255);
            $table->string('implicitGene',255);
            $table->text('description');
            $table->index('sold');

            $table->timestamps();
            $table->softDeletes();
            $table->comment = '鹦鹉';
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
        Schema::dropIfExists('product');
    }

}
