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
                        @if ($errors->has('title'))
                            <div class="error alert-danger">{{ $errors->first('title') }}</div>
                        @endif
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        @if ($errors->has('alias'))
                            <div class="error alert-danger">{{ $errors->first('alias') }}</div>
                        @endif
                        <input type="text" class="form-control" id="alias" name="alias">
                    </div>
                    <div class="form-group">
                        <label for="description">Краткое описание</label>
                        @if ($errors->has('description'))
                            <div class="error alert-danger">{{ $errors->first('description') }}</div>
                        @endif
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Полный текст</label>
                        @if ($errors->has('text'))
                            <div class="error alert-danger">{{ $errors->first('text') }}</div>
                        @endif
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