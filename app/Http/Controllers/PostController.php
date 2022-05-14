<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::all();

        $post = Post::find(1);

        $tag = Tag::find(1);

//        dd($post->tags);
        dd($tag->posts);

//        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);

        Post::create($data);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);

        $post->update($data);

        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'Мой какой-то заголовок 1 поста',
            'content' => 'Тут какой-то контент поста',
            'image' => 'картинка.jpg',
            'likes' => '15',
            'is_published' => '1',
        ];

        $post = Post::firstOrCreate([
            'title' => 'Мой заголовок 1 поста'
        ],$anotherPost);
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'Мой какой-то обновлённый заголовок 1 поста',
            'content' => 'Тут какой-то контент поста',
            'image' => 'картинка.jpg',
            'likes' => '15',
            'is_published' => '1',
        ];

        $post = Post::updateOrCreate([
            'title' => 'Мой какой-то заголовок 1 поста'
        ],$anotherPost);
    }
}
