<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'created_at' => now(),
                'updated_at' => now(),
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => fake()->password()
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('users')->insert($this->getData());
    }
}
