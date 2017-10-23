@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li><a href="/article/show/{{$article->id}}">{{$article->title}}</a>
                    <a class="btn btn-default" href={{route('articleEdit', $article->id)}}>Редактировать</a>
                    <a class="btn btn-danger" href={{route('articleDelete', $article->id)}}>Удалить</a>
                </li>
            @endforeach
        </ul>
    @can('create') <!-- проверяем права -->
        <a class="btn btn-success" href={{route('articleCreate')}}>Добавить статью</a>
        @endcan
    </div>
@endsection