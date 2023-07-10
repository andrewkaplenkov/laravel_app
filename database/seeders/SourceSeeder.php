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

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'name' => fake()->company(),
                'url' => fake()->url(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('sources')->insert($this->getData());
    }
}
