<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'Мой заголовок 1 поста',
                'content' => 'Тут контент поста',
                'image' => 'картинка.jpg',
                'likes' => '15',
                'is_published' => '1',
            ],
            [
                'title' => 'Мой заголовок 2 поста',
                'content' => 'Тут контент поста',
                'image' => 'картинка.jpg',
                'likes' => '21',
                'is_published' => '1',
            ]
        ];

        foreach ($postArr as $post) {
            Post::create($post);
        }

    }

}
