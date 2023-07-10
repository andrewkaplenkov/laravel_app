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

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => fake()->jobTitle(),
                'body' => fake()->text(200),
                'image' => fake()->url(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('news')->insert($this->getData());
    }
}
