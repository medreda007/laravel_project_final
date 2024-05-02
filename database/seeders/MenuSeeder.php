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

        


        $breakfastItems = [
            [
                'name' => 'Pancakes',
                'description' => 'Fluffy pancakes served with syrup, blueberries and cream.',
                'price' => 7,
                'image' => 'assets/image/blueberry-pancakes.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Omelette',
                'description' => 'Egg omelette with cheese and vegetables.',
                'price' => 6,
                'image' => 'assets/image/omlette-vegtebales.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'French Toast',
                'description' => 'French toast with powdered sugar.',
                'price' => 8,
                'image' => 'assets/image/french-toast.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Bagel and Cream Cheese',
                'description' => 'Fresh bagel with cream cheese.',
                'price' => 4,
                'image' => 'assets/image/bagel-cream-cheese.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Breakfast Burrito',
                'description' => 'Burrito with eggs, cheese, and vegetables.',
                'price' => 9,
                'image' => 'assets/image/breakfast-burrito.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Smoothie Bowl',
                'description' => 'Smoothie bowl with fruits and granola.',
                'price' => 7,
                'image' => 'assets/image/smoothie-bowl.jpg',
                'category' => 'breakfast',
                'created_at' => Carbon::now(),
            ],
        ];

        $lunchItems = [
            [
                'name' => 'Grilled Chicken Sandwich',
                'description' => 'Grilled chicken with lettuce and tomato.',
                'price' => 10,
                'image' => 'assets/image/Grilled-Chicken-Sandwiches.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Romaine lettuce with croutons, chicken and Caesar dressing .',
                'price' => 8,
                'image' => 'assets/image/Caesar-Salad.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Club Sandwich',
                'description' => 'Triple-layer sandwich with turkey, bacon, and lettuce.',
                'price' => 11,
                'image' => 'assets/image/Club-Sandwich.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Soup of the Day',
                'description' => 'Freshly prepared soup of the day.',
                'price' => 6,
                'image' => 'assets/image/Soup-of-the-Day.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Veggie Wrap',
                'description' => 'Wrap with mixed vegetables and hummus.',
                'price' => 8,
                'image' => 'assets/image/Veggie-Wrap.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Quiche Lorraine',
                'description' => 'Quiche with ham, cheese, and cream.',
                'price' => 10,
                'image' => 'assets/image/Quiche-Lorraine.jpg',
                'category' => 'lunch',
                'created_at' => Carbon::now(),
            ],
        ];

        $dinnerItems = [
            [
                'name' => 'Steak Frites',
                'description' => 'Grilled steak served with French fries.',
                'price' => 20,
                'image' => 'assets/image/Steak-Frites.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Salmon Fillet',
                'description' => 'Grilled salmon fillet with vegetables.',
                'price' => 22,
                'image' => 'assets/image/Salmon-Fillet.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Pasta Bolognese',
                'description' => 'Pasta with rich meat sauce.',
                'price' => 15,
                'image' => 'assets/image/Pasta-Bolognese.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Grilled Vegetables',
                'description' => 'Assorted grilled vegetables with balsamic glaze.',
                'price' => 12,
                'image' => 'assets/image/Grilled-Vegetables.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Chicken Alfredo Pasta',
                'description' => 'Pasta with chicken in Alfredo sauce.',
                'price' => 18,
                'image' => 'assets/image/Chicken-Alfredo-Pasta.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Vegetable Stir Fry',
                'description' => 'Stir-fried vegetables with tofu and noodles.',
                'price' => 14,
                'image' => 'assets/image/Vegetable-Stir-Fry.jpg',
                'category' => 'dinner',
                'created_at' => Carbon::now(),
            ],
        ];

        // Insert all items into the database
        Menu::insert(array_merge($breakfastItems, $lunchItems, $dinnerItems));
    }
}
