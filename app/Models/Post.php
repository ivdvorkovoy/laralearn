<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Явное указание таблицы
    protected $table = 'posts';

    // В массиве объявляются поля, в которые нельзя добавлять
    protected $guarded = [];
}
