<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;    // Мягкое удаление

    // Явное указание таблицы
    protected $table = 'posts';

    // В массиве объявляются поля, в которые нельзя добавлять
    protected $guarded = [];

}
