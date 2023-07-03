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
                'created_at' => now(),
                'updated_at' => now(),
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => 'admin'
            ]
        ];

        for ($i = 0; $i < 10; $i++) {
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
