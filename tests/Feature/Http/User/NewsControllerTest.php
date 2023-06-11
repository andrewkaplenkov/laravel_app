<?php

namespace Tests\Feature\Http\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_it_shows_news_list(): void
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
    }

    public function test_it_shows_article_by_id(int $id = 7): void
    {
        $response = $this->get("/news/$id");

        $response->assertStatus(200);
    }

    public function test_it_shows_categories_list(): void
    {
        $response = $this->get("/categories");

        $response->assertStatus(200);
    }

    public function test_it_shows_news_by_category(string $category = "Sport"): void
    {
        $response = $this->get("/news/$category");

        $response->assertStatus(200);
    }
}
