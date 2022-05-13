@extends('layouts.main')
@section('content')
    <h3>Создать публикацию</h3>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title">
            <div id="titleHelp" class="form-text">какое-то описание поля</div>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Текст публикации</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            <div id="contentHelp" class="form-text">какое-то описание поля</div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Картинка анонса</label>
            <input type="text" class="form-control" id="image" name="image">
            <div id="imageHelp" class="form-text">какое-то описание поля</div>
        </div>
        <div class="mb-3">
            <label for="likes" class="form-label">Количество лайков</label>
            <input type="number" class="form-control" id="likes" name="likes">
            <div id="likesHelp" class="form-text">какое-то описание поля</div>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
