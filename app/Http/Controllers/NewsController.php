<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('news/index', [
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id)
    {
        return view('news/show', [
            'news' => $this->getNews($id)
        ]);
    }

    public function filtered(string $category)
    {
        return view('news/filtered', [
            'filteredNewsList' => $this->getNewsByCategory($category)
        ]);
    }

    public function categories()
    {
        return view('news/categories', [
            'categories' => $this->getCategories()
        ]);
    }
}
