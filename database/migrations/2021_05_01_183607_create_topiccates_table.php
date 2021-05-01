<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopiccatesTable extends Migration 
{
	public function up()
	{
		Schema::create('topiccates', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index()->default(0);
            $table->string('name');
            $table->integer('order')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('topiccates');
	}
}
