<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Game;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function step1()
    {
        $cart = Cart::getUserCart();
        return view('cart.step1', ['cart' => $cart]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function step2()
    {
        $cart = Cart::getUserCart();
        $sum = $cart->sum('price');
        return view('cart.step2', ['cart' => $cart, 'sum' => $sum]);
    }

    /**
     * @param Game $game
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Game $game)
    {
        Cart::storeGame($game);
        return redirect()->route('cart.step1');
    }
}
