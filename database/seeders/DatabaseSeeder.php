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


        $this->call([
            MenuSeeder::class,
            TableSeeder::class,
        ]);

        
        
    }
}
