<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sources')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];
        for ($i = 1; $i < 10; $i++) {
            $data[] = [
                'title' => 'News #' . fake()->jobTitle(),
                'source_url' => fake()->url(),
                'image' => fake()->imageUrl(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return $data;
    }
}
