<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("title",150);
            $table->string("content");
            $table->string("keywords")->nullable();
            $table->integer("category_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->string("image",100)->nullable();
            $table->string("slug",100)->nullable();
            $table->string("status")->nullable()->default("False");
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
        Schema::dropIfExists('posts');
    }
}
