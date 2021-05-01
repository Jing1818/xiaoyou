<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration 
{
	public function up()
	{
		Schema::create('follows', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->index()->default(0);
            $table->bigInteger('follow_user_id')->unsigned()->index()->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('follows');
	}
}
