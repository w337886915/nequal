<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->json('name')->comment('名称');
            $table->json('sub_name')->nullable()->comment('副标题');
            $table->json('introduction')->comment('产品概述');
            $table->json('advantage')->comment('产品优势');
            $table->string("thumb",255)->nullable()->comment('封面');
            $table->string('brand_ids')->nullable()->comment('客户图片ids');
            $table->string('email')->nullable()->comment('联系邮箱');
            $table->string('tel')->nullable()->comment('联系电话');
            $table->enum("status",[0,1])->default(1)->comment('状态');
            $table->integer('order')->default(9999)->comment("排序");

            $table->softDeletes();
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
        Schema::dropIfExists('solutions');
    }
}
