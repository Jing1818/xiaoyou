<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatesTable extends Migration 
{
	public function up()
	{
		Schema::create('plates', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id')->unsigned()->default(0)->index();
            $table->string('plate_name');
            $table->string('plate_type');
            $table->tinyinteger('order')->default(0);
            $table->integer('master_id')->unsigned()->default(0)->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('plates');
	}
}
