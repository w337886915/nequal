<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',128)->comment('品牌名称');
            $table->string('url',255)->nullable()->comment('品牌链接地址');
            $table->string('image',255)->comment('服务品牌图标');
            $table->integer('order')->default(9999)->comment('排序');
            $table->timestamps();
            
            $table->index('order','order_index');
        });
	}

	public function down()
	{
		Schema::drop('brands');
	}
}
