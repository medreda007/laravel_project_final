<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Table;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

// use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin = User::factory()->create([
            'name' => 'Reda',
            'email' => 'test2@example.com',
            'password' => Hash::make('123456789'), // Replace 'password' with your desired password
            'role' => 'admin', // Set the role to 'admin'
        ]);

        
        Role::insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],
            [
                "name" => "staff",
                "guard_name" => "web"
            ],
            [
                "name" => "client",
                "guard_name" => "web"
            ],
        ]);

        $admin->assignRole('admin');

        Menu::insert([
            [
                'name' => 'Pizza Margherita',
                'description' => 'Classic pizza with tomato sauce, mozzarella, and basil.',
                'price' => 12,
                'image' => 'pizza_margherita.jpg',
                // 'user_id' => null, // Ensure that a user with ID 1 exists in the 'users' table
                // "quantity" => null,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Salad with romaine lettuce, croutons, and Caesar dressing.',
                'price' => 8,
                'image' => 'caesar_salad.jpg',
                // 'user_id' => null, // Ensure that a user with ID 2 exists in the 'users' table
                // "quantity" => null,
                'created_at' => Carbon::now(),
            ]
        ]);
        Table::insert([
            [
                'table_number' => 'T1',
                'capacity' => 4,
                'status' => 'available'
            ],
            [
                'table_number' => 'T2',
                'capacity' => 2,
                'status' => 'available'
            ],
            [
                'table_number' => 'T3',
                'capacity' => 6,
                'status' => 'not available'
            ],
            [
                'table_number' => 'T4',
                'capacity' => 8,
                'status' => 'available'
            ],
            [
                'table_number' => 'T5',
                'capacity' => 10,
                'status' => 'available'
            ],
            [
                'table_number' => 'T6',
                'capacity' => 4,
                'status' => 'available'
            ],
        ]);
    }
}
