<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinsTable extends Migration
{
    /**
     * Run the migrations.
     * 发布职位表
     * @return void
     */
    public function up()
    {
        Schema::create('joins', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name')->comment('职位名');
            $table->json('keywords')->comment('关键词');
            $table->json('content')->nullable()->comment('职位描述');
            $table->integer('place_id')->comment('工作地点');
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
        Schema::dropIfExists('joins');
    }
}
