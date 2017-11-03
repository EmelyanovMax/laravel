<?php

namespace App\Http\Controllers;

use App\CustomFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ArticleController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index() {
    $articles = Article::all();
    return view('articles', [
      'articles' => $articles,
    ]);
  }

  /**
   * Validate fields before saving
   */
  public function _validate($request) {

    $validator = Validator::make($request->all(), [
      'title' => 'required|max:255|min:4',
      'alias' => 'required|unique:articles,alias|max:50',
      'description' => 'required|min:4',
      'text' => 'required|min:10',
    ]);
    return $validator;
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    return view('article-create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    $validator = $this->_validate($request);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator->errors());
    }
    else {
      $article = new Article;

      foreach ($request->file as $uploaded_file) {
        $user_filename = $uploaded_file->getClientOriginalName();
        $saved_filename = time() . '_' . $user_filename;
        $path = storage_path() . '/app/public/photos/';
        $uploaded_file->move($path, $saved_filename);
        $file = new CustomFile;
        $file['name'] = $user_filename;
        $file['path'] = $path . $saved_filename;

        $file->save();
        $file_ids[] = $file['id'];
      }

      $request['file_id'] = serialize($file_ids);
      $article->create($request->all());

      return redirect('/articles');
    }
  }

  /**
   * Display the specified resource.
   */
  public function show($id) {
    $article = Article::find($id);
    return view('article-show', [
      'article' => $article,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id) {
    $article = Article::find($id);
    return view('article-edit', [
      'article' => $article,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id) {
    $validator = $this->_validate($request);
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator->errors());
    }
    else {
      $article = Article::find($id);

      $article->update($request->all());
      return redirect('/articles');
    }
  }

  /**
   * Remove the specified resource from storage.
   */

  //ToDo remake to POST

  public function delete($id) {
    $article = Article::find($id);
    $article->delete();
    return redirect('/articles');
  }
}
