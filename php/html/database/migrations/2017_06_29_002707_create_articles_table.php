<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {
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
      $table->text('text');
      $table->string('description');
      $table->integer('category_id');
      $table->boolean('public');
      $table->boolean('comments_enable');
      $table->timestamps();
    });
    DB::statement("ALTER TABLE articles ADD file_id BLOB");
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
