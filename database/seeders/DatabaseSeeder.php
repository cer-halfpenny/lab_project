<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);

        $this->call([AxolotlTableSeeder::class, StoryTableSeeder::class]);
  
        \App\Models\Axolotl::factory(8)->create();   // 3 random axolotls
        \App\Models\Story::factory(15)->create();     // 5 random stories (each linked to a NEW axolotl)
    }
} 
