<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->integer('topic_id')->unsigned()->index()->default(0);
            $table->integer('activity_id')->unsigned()->index()->default(0);
            $table->integer('reply_count')->unsigned()->default(0);
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->integer('like_count')->unsigned()->default(0);
            $table->integer('plate_id')->unsigned()->index()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('posts');
	}
}
