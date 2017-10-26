<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomFile extends Model {
  protected $table='files';
  protected $fillable = ['path'];
}
