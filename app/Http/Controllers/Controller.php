<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private array $newsList = [];
    private array $categoryList = [
        'Internet',
        'Culture',
        'Science',
        'Sport',
        'Ratings'
    ];

    public function getCategories(): array
    {
        return $this->categoryList;
    }

    public function getNews(int $id = null, string $category = null): array
    {
        $faker = Factory::create();

        if ($id) {
            return [
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'body' => $faker->text(150),
                'category' => 'Sport',
                'created_at' => now()->format('d-m-Y H:i')
            ];
        }


        for ($i = 1; $i < 20; $i++) {
            $rand_key = array_rand($this->categoryList, 1);
            $this->newsList[$i] = [
                'title' => $faker->jobTitle(),
                'author' => $faker->userName(),
                'body' => $faker->text(150),
                'category' => $this->categoryList[$rand_key],
                'created_at' => now()->format('d-m-Y H:i')
            ];
        }

        return $this->newsList;
    }

    public function getNewsByCategory(string $category): array
    {

        foreach ($this->getNews() as $key => $news) {
            if (in_array($category, $news)) {
                $filteredNews[$key] = $news;
            }
        }

        return $filteredNews;
    }
}
