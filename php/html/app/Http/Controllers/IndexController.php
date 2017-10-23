<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller {

  protected $header;
  protected $message;

  public function __construct() {
    $this->header = 'Hello World!!!!';
    $this->message = 'Hello World';
  }

  public function index() {
    $articles = Article::select(['id', 'title', 'description'])->get();
    return view('/bootstrap/page')->with([
      'header' => $this->header,
      'msg' => $this->message,
      'articles' => $articles,
    ]);
  }

  public function show($id) {
    $article = Article::select(['id', 'title', 'text'])
      ->where('id', '=', $id)
      ->first();
    return view('article-content')->with([
      'header' => $this->header,
      'msg' => $this->message,
      'article' => $article,
    ]);
  }

  public function add() {
    return view('add-content')->with([
      'header' => $this->header,
      'msg' => $this->message,
    ]);
  }

  public function store(Request $request) {
    $this->validate($request, [
      'title' => 'required|max:255|min:4',
      'alias' => 'required|unique:articles,alias|max:50',
      'description' => 'required|min:4',
      'text' => 'required|min:10',
    ]);
    $data = $request->all();
    $article = new Article;
    $article->fill($data);
    $article->save();

//    return redirect('/');
  }

  public function delete(Article $article) {
    $article->delete();
    return redirect('/');

  }
}
