<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    //
    /**
     * @return mixed
     */
    public static function getUserCart()
    {
        return self::where('user_id', Auth::id())
            ->with('game')
            ->where('order_id', null)
            ->get();
    }

    /**
     * @return mixed
     */
    public static function getUserCartCount()
    {
        return self::where('user_id', Auth::id())
            ->with('game')
            ->where('order_id', null)
            ->count();
    }

    /**
     * @param Game $game
     * @return Cart
     */
    public static function storeGame(Game $game)
    {
        $cart = new Cart();
        $cart->game_id = $game->id;
        $cart->order_id = null;
        $cart->price = $game->price;
        $cart->user_id = Auth::id();
        $cart->save();
        return $cart;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function game()
    {
        return $this->hasOne(Game::class, 'id', 'game_id');
    }
}
