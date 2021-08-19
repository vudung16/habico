<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->integer('user_id');
            $table->longText('title');
            $table->longText('desc');
            $table->longText('details');
            $table->longText('slug');
            $table->string('image')->nullable();
            $table->integer('status');
            $table->integer('featured');
            $table->integer('view_count')->nullable();
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
        Schema::dropIfExists('news');
    }
}