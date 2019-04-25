<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->char('content',255)->comment('咨询内容');
            $table->char('company',255)->nullable()->comment('公司名称');
            $table->char('name',255)->comment('称呼');
            $table->char('phone',255)->comment('电话');
            $table->char('province',255)->comment('地区');
            $table->char('salesman_phone',255)->nullable()->comment('业务员电话');
            $table->char('category',255)->comment('咨询类目');
            $table->tinyInteger('isread')->default(0)->comment('是否以查看');
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
        Schema::dropIfExists('consultations');
    }
}
