<?php

namespace App\Http\View\Composers;

use App\Cart;
use App\Category;
use App\Game;
use App\News;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using Closure based composers...
        View::composer('*', function ($view) {
            $categories = Category::limit(10)
                ->orderBy(\DB::raw('RAND()'))
                ->get();
            $randomGame = Game::orderBy(\DB::raw('RAND()'))
                ->first();

            $lastNews = News::orderBy('id', 'desc')->limit(3)->get();
            $userCartCount = Cart::getUserCartCount();

            $view->with('categories', $categories);
            $view->with('randomGame', $randomGame);
            $view->with('lastNews', $lastNews);
            $view->with('userCartCount', $userCartCount);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}