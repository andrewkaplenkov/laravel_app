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

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 15; $i++) {
            $data[] = [
                'created_at' => now(),
                'updated_at' => now(),
                'title' => fake()->jobTitle(),
                'body' => fake()->text(200),
                'image' => fake()->url(),
                'user_id' => 1,
                'status' => NewsStatuses::all()[array_rand(NewsStatuses::all())]
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('news')->insert($this->getData());
    }
}
