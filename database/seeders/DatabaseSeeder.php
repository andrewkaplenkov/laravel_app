<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            SourceSeeder::class,
            NewsSeeder::class
        ]);

        for ($i = 1; $i <= 18; $i++) {

            DB::table('category_news')->insert([
                'category_id' => rand(1, 6),
                'news_id' => rand(1, 10)
            ]);
        }
    }
}
