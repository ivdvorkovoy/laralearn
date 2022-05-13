@extends('layouts.main')
@section('content')
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <p>Лайки: {{ $post->likes }}</p>
    <p>

        <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <a class="btn btn-primary" href="{{ route('post.index') }}">назад</a>
        <a class="btn btn-info" href="{{ route('post.edit', $post->id) }}">редактировать</a>
        <button type="submit" class="btn btn-danger">удалить</button>
        </form>

    </p>
@endsection
