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
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => fake()->password(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $data;
    }

    public function run(): void
    {
        DB::table('users')->insert($this->getData());
    }
}
