<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomFile extends Model {
  protected $table = 'files';
  protected $fillable = ['name', 'path'];

  public function delete() {
    if (file_exists($this->path)) {
      @unlink($this->path);
    }
    parent::delete();
  }
}