<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
