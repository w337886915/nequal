<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //'id','name','order', 'image', 'description'
        Schema::create('honors', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name')->comment('荣誉名称');
            $table->string('image',255)->comment('图片');
            $table->integer('order')->default(999)->comment('排序');
            $table->timestamps();
            $table->index('order','order_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('honors');
    }
}
