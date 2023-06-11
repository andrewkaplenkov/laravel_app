<?php

namespace Tests\Feature\Http\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderFormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_it_stores_data_from_form(): void
    {
        $postData = [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email()
        ];

        $response = $this->post(route('order.store'), $postData);
        // $response = $this->getJson(route('order.store'), $postData);

        $response->assertStatus(200);
        $response->assertJson($postData);
    }
}
