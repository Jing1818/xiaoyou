<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityjoinlogsTable extends Migration 
{
	public function up()
	{
		Schema::create('activityjoinlogs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->unsigned()->default(0)->index();
            $table->bigInteger('user_id')->unsigned()->index()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->integer('like_count')->unsigned()->default(0);
            $table->integer('rank_level')->default(0);
            $table->string('win_reason')->nullable(true);
            $table->integer('join_count')->default(0);
            $table->integer('reward_type')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('activityjoinlogs');
	}
}
