<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBbsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            //
            $table->integer('post_count')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->bigInteger('like_total')->unsigned()->default(0);
            $table->integer('follow_count')->unsigned()->default(0);
            $table->integer('fans_count')->unsigned()->default(0);
            $table->string('bbs_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
            $table->integer('post_count')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);
            $table->bigInteger('like_total')->unsigned()->default(0);
            $table->integer('follow_count')->unsigned()->default(0);
            $table->integer('fans_count')->unsigned()->default(0);
            $table->string('bbs_roles');
        });
    }
}
