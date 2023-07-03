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

    private array $categories = [
        1 => 'Sport',
        2 => 'Science',
        3 => 'Lifestyle',
        4 => 'Economics',
        4 => 'Games',
        6 => 'Music'
    ];

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 6; $i++) {
            $data[] = [
                'created_at' => now(),
                'updated_at' => now(),
                'title' => $this->categories[array_rand($this->categories, 1)],
                'description' => fake()->text(50)
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('categories')->insert($this->getData());
    }
}
