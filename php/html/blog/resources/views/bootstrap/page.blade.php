@extends('layouts.site')

@section('content')
    <div id="gtco-main">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-post-list">
                        @foreach($articles as $article)
                            <li class="one-half entry animate-box" data-animate-effect="fadeIn">
                                <a href="single.html">
                                    <div class="entry-img"
                                         style="background-image: url({{asset('images/img_1.jpg')}})"></div>
                                    <div class="entry-desc">
                                        <h3>{{$article->title}}</h3>
                                        <p>{{$article->description}}</p>
                                    </div>
                                </a>
                                <a href="{{route('articleShow', ['id'=>$article->id])}}"
                                        class="btn btn-default post-meta">Подробнее</a>
                                <form action="{{route('articleDelete', ['article'=>$article->id])}}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                    {{csrf_field()}}
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection