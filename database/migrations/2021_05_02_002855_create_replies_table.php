<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration 
{
	public function up()
	{
		Schema::create('replies', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->default(0)->index();
            $table->string('reply_type')->default('text');
            $table->text('content');
            $table->integer('from_uid')->default(0)->index();
            $table->integer('to_uid')->default(0)->index();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('replies');
	}
}
