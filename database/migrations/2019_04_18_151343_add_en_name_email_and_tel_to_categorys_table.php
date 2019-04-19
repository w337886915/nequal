<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnNameEmailAndTelToCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categorys', function (Blueprint $table) {
            $table->string('en_name')->after('name')->nullable()->comment('英文标题');
            $table->string('email')->after('template')->nullable()->comment('联系邮箱');
            $table->string('tel', 50)->after('email')->nullable()->comment('联系电话');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categorys', function (Blueprint $table) {
            $table->dropColumn('en_name');
            $table->dropColumn('email');
            $table->dropColumn('tel');
        });
    }
}
