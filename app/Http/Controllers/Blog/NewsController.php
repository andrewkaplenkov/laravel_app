<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use App\Queries\NewsQueryBuilder;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(
        private NewsQueryBuilder $builder
    ) {
    }

    public function index()
    {
        $news = $this->builder->getAll();

        return view('blog.news.index', [
            'news' => $news,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('blog.news.show', ['news' => $news]);
    }
}
