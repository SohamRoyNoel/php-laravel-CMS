<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentRepliesTable extends Migration
{

    public function up()
    {
        Schema::create('comment_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id')->unsigned()->index();;
            $table->integer('is_active')->default();
            $table->string('author');
            $table->string('email');
            $table->text('body');
            $table->timestamps();


            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::drop('comment_replies');
    }
}
