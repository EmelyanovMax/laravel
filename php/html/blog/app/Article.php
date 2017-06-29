<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
  protected $table='articles';
  protected $fillable = ['alias', 'title', 'description', 'text'];
}
