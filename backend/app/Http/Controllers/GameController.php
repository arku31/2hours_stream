<?php

namespace App\Http\Controllers;

use App\Category;
use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show(int $game)
    {
        $game = Game::with('category')->find($game);

        return view('games.show', ['game' => $game]);
    }

    public function search(Request $request)
    {
        $games = Game::with('category')
            ->where('title', 'LIKE', '%'.$request->get('search').'%')
            ->get();
        dd($games);
    }
}
