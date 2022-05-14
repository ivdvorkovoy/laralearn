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
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Теги</label>
            <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
                @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
