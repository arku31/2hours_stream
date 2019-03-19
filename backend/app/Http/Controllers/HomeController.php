<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $games = Game::paginate(12);
        return view('home', ['games' => $games]);
    }

    /**
     * @return mixed
     */
    public function loadByAjax()
    {
        $games = Game::paginate(12);
        return $games;
    }

    public function home()
    {
        return view('home');
    }
}
