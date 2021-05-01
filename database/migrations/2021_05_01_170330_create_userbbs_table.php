<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserbbsTable extends Migration 
{
	public function up()
	{
		Schema::create('userbbs', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('post_count')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->bigInteger('like_total')->unsigned()->default(0);
            $table->integer('follow_count')->unsigned()->default(0);
            $table->integer('fans_count')->unsigned()->default(0);
            $table->string('bbs_roles');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('userbbs');
	}
}
