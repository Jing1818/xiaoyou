<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration 
{
	public function up()
	{
		Schema::create('topics', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('cate_id')->unsigned()->default(0)->index();
            $table->string('topic_name')->index();
            $table->text('topic_desc')->nullable();
            $table->integer('post_count')->default(0);
            $table->integer('member_count')->unsigned()->default(0);
            $table->bigInteger('master_id')->unsigned()->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('topics');
	}
}
