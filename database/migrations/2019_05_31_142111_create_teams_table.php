<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
           // $table->uuid('object_id')->comment('objectId');
            $table->smallInteger("group")->default(0)->comment('分组');
            $table->json("name")->comment('名称');
            $table->json("description")->comment('描述');
            $table->string("image",255)->comment('图片');
            $table->integer("order")->default(999)->comment('排序');

            $table->timestamps();

            $table->index('group','group_index');
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
        Schema::dropIfExists('teams');
    }
}
