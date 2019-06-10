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
            $table->string('name',255)->comment('姓名');
            $table->string('phone',50)->comment('电话');
            $table->string('email',100)->comment('邮箱');
            $table->string('company',255)->comment('公司');
            $table->string('position',255)->comment('职位');
            $table->char('demand',255)->comment('需求');
            $table->tinyInteger('is_read')->default(0)->comment('是否已读');
            $table->timestamps();
            $table->softDeletes();
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
