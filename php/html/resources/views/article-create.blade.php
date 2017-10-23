@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="form">

                <form method="post" action="{{route('articleStore')}}">
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input type="text" class="form-control" id="alias" name="alias">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Краткое описание</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Полный текст</label>
                        <textarea class="form-control" name="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Создать</button>

                    {{csrf_field()}}
                </form>

            </div>
        </div>
    </div>
@endsection