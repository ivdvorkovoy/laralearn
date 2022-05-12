<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Поиск по Id в таблице posts
        $post = Post::find(1);

        //Дамп без остановки выполнения
        dump($post);
    }

}
