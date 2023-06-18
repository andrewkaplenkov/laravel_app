<?php

namespace Database\Seeders;

use App\Enums\NewsStatuses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];
        for ($i = 1; $i < 20; $i++) {
            $data[] = [
                'title' => 'News #' . fake()->jobTitle(),
                'author' => fake()->userName(),
                'status' => NewsStatuses::BLOCKED,
                'image' => fake()->imageUrl(),
                'body' => fake()->text(300),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return $data;
    }
}
