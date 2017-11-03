<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
  protected $table = 'articles';
  protected $fillable = ['alias', 'title', 'description', 'text', 'file_id'];

  public function files() {
    return $this->hasMany('App\CustomFile', 'id', 'file_id');
  }

  public function delete() {

    $file_ids = unserialize($this->file_id);
    if (isset($file_ids)) {
      foreach ($file_ids as $file_id) {
        $file = CustomFile::find($file_id);
//        $this->file_id = $file_id;
        $file->delete();
      }
    }
    parent::delete();
  }
}
