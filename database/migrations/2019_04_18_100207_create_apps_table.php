<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration 
{
	public function up()
	{
		Schema::create('apps', function(Blueprint $table) {
            $table->increments('id');
            
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('apps');
	}
}
