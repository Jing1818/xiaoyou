<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicUserView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_user_view', function (Blueprint $table) {
            $table->id();
            $table->integer('topic')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->tinyInteger('is_join')->default(0);
            $table->tinyInteger('is_share')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_user_view');
    }
}
