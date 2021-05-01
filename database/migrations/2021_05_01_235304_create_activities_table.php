<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration 
{
	public function up()
	{
		Schema::create('activities', function(Blueprint $table) {
            $table->increments('id');
            $table->string('activity_name');
            $table->string('activity_desc');
            $table->tinyInteger('status')->default(0);
            $table->integer('start_time')->default(0);
            $table->integer('end_time')->default(0);
            $table->bigInteger('user_id')->unsigned()->default(0)->index();
            $table->tinyinteger('is_admin')->unsigned()->default(0);
            $table->integer('join_num')->unsigned()->default(0);
            $table->tinyinteger('is_show_winner')->default(1);
            $table->string('activity_type')->default('text');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('activities');
	}
}
