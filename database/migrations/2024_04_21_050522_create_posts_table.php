<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->string('title')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('slug')->nullable();
            $table->text('article')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->integer('reg');
            $table->integer('set_active')->nullable();
            $table->integer('set_title')->nullable();
            $table->integer('set_image')->nullable();
            $table->integer('set_author')->nullable();
            $table->integer('set_article')->nullable();
            $table->integer('set_comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
