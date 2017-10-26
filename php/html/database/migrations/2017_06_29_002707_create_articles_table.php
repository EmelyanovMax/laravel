<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticlesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('articles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('alias');
      $table->string('title');
      $table->integer('file_id');
      $table->text('text');
      $table->string('description');
      $table->string('image');
      $table->string('meta_description');
      $table->string('meta_keywords');
      $table->integer('category_id');
      $table->boolean('public');
      $table->boolean('comments_enable');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('articles');
  }
}
