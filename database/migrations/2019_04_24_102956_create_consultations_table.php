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
            $table->char('content',255)->comment('��ѯ����');
            $table->char('company',255)->nullable()->comment('��˾����');
            $table->char('name',255)->comment('�ƺ�');
            $table->char('phone',255)->comment('�绰');
            $table->char('province',255)->comment('����');
            $table->char('salesman_phone',255)->nullable()->comment('ҵ��Ա�绰');
            $table->char('category',255)->comment('��ѯ��Ŀ');
            $table->tinyInteger('isread')->default(0)->comment('�Ƿ��Բ鿴');
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
