<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //When running a migration
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug'); //url slug of post
            $table->string('title'); 
            $table->text('body'); //body of post
            $table->timestamps();
            $table->timestamp('published_at')->nullable();//When making a new post, the published at column/field is optional
        });
    }

    /**
     * Reverse the migrations - roll back/undo migrations with version control.
     *This method should be able to undo any work done here
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts'); //When rolling back, drop this table from the database
    }
}
