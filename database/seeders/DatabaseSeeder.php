<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
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
        \App\Models\Todo::factory(50)->create();

        // \App\Models\Todo::factory(20)->create([
        //     'title' => 'Test User',
        //     'todo' => 'test@example.com',
        // ]);
    }
}
