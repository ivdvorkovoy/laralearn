@extends('layouts.admin')

@section('content')
    <h3>Страница с публикациями</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Контент</th>
            <th scope="col">Ссылки</th>
            <th scope="col">Лайки</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a href="{{ route('admin.post.show', $post->id) }}"><i class="nav-icon fas fa-info-circle"></i></a>
                    <a href="{{ route('admin.post.edit', $post->id) }}"><i class="nav-icon fas fa-edit"></i></a>
                    <a href="{{ route('admin.post.destroy', $post->id) }}"><i class="nav-icon fas fa-trash"></i></a>
                </td>
                <td>{{ $post->likes }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->withQueryString()->links() }}
@endsection
