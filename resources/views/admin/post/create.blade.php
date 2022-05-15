@extends('layouts.admin')
@section('content')
    <h3>Создать публикацию</h3>
    <form action="{{ route('admin.post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            <div id="titleHelp" class="form-text">какое-то описание поля</div>
            @error('title')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Текст публикации</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
            <div id="contentHelp" class="form-text">какое-то описание поля</div>
            @error('content')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Картинка анонса</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
            <div id="imageHelp" class="form-text">какое-то описание поля</div>
            @error('image')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="likes" class="form-label">Количество лайков</label>
            <input type="number" class="form-control" id="likes" name="likes" value="{{ old('likes') }}">
            <div id="likesHelp" class="form-text">какое-то описание поля</div>
            @error('likes')
            <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select class="form-select" aria-label="Default select example" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
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
