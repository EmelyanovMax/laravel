<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
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
   * Show the form for creating a new resource.
   */
  public function create() {
    return view('article-create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:255|min:4',
      'alias' => 'required|unique:articles,alias|max:50',
      'description' => 'required|min:4',
      'text' => 'required|min:10',
    ]);
    $article = new Article;
    $article->create($request->all());

    return redirect('/articles');
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
    $this->validate($request, [
      'title' => 'required|max:255|min:4',
      'alias' => 'required|max:50|unique:articles,alias,' . $id,
      'description' => 'required|min:4',
      'text' => 'required|min:10',
    ]);

    $article = Article::find($id);
    $article->update($request->all());
    return redirect('/articles');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function delete($id) {
    $article = Article::find($id);
    $article->delete();
    return redirect('/articles');
  }
}
