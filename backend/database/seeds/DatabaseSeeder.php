<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class)->times(50)->create();
        factory(\App\Game::class)->times(50)->create();
        factory(\App\News::class)->times(50)->create();
        factory(\App\Order::class)->times(1)->create();
        factory(\App\Cart::class)->times(10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
