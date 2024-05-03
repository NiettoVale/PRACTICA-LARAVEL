<?php

namespace Modules\Games\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GamesController extends Controller
{
    public function index()
    {
        return view('games::index');
    }

    public function componentes()
    {
        return view('games::componentes');
    }

    public function imagenes()
    {
        return view('games::galeria');
    }

    public function personajes()
    {
        return view('games::imagenes');
    }
}
