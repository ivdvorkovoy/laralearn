<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer',
            'tags' => ''

        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'category_id' => 'integer',
            'tags' => ''
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post = $post->fresh();

        $post->tags()->sync($tags);

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
