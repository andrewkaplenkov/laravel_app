<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [];
        for ($i = 1; $i < 7; $i++) {
            $data[] = [
                'title' => 'Category #' . $i,
                'description' => fake()->text(80),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return $data;
    }
}
