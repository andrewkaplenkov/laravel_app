<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use App\Queries\NewsQueryBuilder;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __construct(
        private NewsQueryBuilder $newsQueryBuilder
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(string $category = null)
    {
        $news = $this->newsQueryBuilder->all();


        return view('blog.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('blog.news.show', [
            'news' => $news
        ]);
    }
}
