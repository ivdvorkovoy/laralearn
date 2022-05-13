@extends('layouts.main')
@section('content')
    <h3>Страница с публикациями</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Контент</th>
            <th scope="col">Лайки</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->likes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
