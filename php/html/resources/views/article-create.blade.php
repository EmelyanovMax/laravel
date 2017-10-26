@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/tiny_mce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tiny_mce_settings.js') }}"></script>
    <script src="{{ asset('js/new_article.js') }}"></script>
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
                    <div id="file-wrapper">
                        <div class="file-item">
                            <div class="form-group file">
                                <input type="file" name="file">
                            </div>
                            <button class="delete-file btn-danger" type="button">Удалить файл</button>
                        </div>
                    </div>
                    <button id="add-file" type="button">Добавить еще файл</button>
                    <button type="submit" class="btn btn-success">Создать</button>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
@endsection