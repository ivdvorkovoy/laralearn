<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index()
    {
        return 'Ну привет ))';
    }

    public function second()
    {
        return 'Опаньки! Вторая страница';
    }

    public function app18()
    {
        return 'Страница с номером';
    }
}
