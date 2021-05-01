<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration 
{
	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->text('content');
            $table->integer('from_uid')->unsigned()->index();
            $table->string('comment_type')->default('text');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
