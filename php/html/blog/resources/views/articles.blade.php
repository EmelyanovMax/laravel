@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li><a href="/article/show/{{$article->id}}">{{$article->title}}</a>
                    <a class="btn btn-default" href="/article/edit/{{$article->id}}">Редактировать</a>
                    <a class="btn btn-danger" href="/article/delete/{{$article->id}}">Удалить</a>
                </li>
            @endforeach
        </ul>
    @can('create') <!-- проверяем права -->
        <a class="btn btn-success" href="/article/create">Добавить статью</a>
        @endcan
    </div>
@endsection