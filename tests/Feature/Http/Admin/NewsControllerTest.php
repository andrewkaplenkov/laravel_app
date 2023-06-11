<?php

namespace Tests\Feature\Http\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_success_news_list(): void
    {
        $response = $this->get(route('admin.news.index'));

        $response->assertStatus(200);
    }

    public function test_success_create_form(): void
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }

    public function test_it_stores_data_from_form(): void
    {
        $postData = [
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            'body' => fake()->text(100)
        ];

        $response = $this->post(route('admin.news.store'), $postData);

        $response->assertStatus(200);
        $response->assertJson($postData);
    }
}