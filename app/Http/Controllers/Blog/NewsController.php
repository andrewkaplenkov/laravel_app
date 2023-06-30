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
    public function index(NewsQueryBuilder $builder)
    {
        return $builder->getAll();
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return $news;
    }
}
