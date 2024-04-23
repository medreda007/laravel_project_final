<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Insert menu items
        // Menu::insert([
        //     [
        //         'name' => 'Pizza Margherita',
        //         'description' => 'Classic pizza with tomato sauce, mozzarella, and basil.',
        //         'price' => 12,
        //         'image' => 'pizza_margherita.jpg',
        //         'user_id' => User::where('email', 'user1@example.com')->first()->id,
        //         'created_at' => Carbon::now(),
        //     ],
        //     [
        //         'name' => 'Caesar Salad',
        //         'description' => 'Salad with romaine lettuce, croutons, and Caesar dressing.',
        //         'price' => 8,
        //         'image' => 'caesar_salad.jpg',
        //         'user_id' => User::where('email', 'user2@example.com')->first()->id,
        //         'created_at' => Carbon::now(),
        //     ],
        // ]);
    }
}
