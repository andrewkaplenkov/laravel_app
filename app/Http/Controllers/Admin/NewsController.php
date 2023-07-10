<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Queries\NewsQueryBuilder;
use App\Queries\CategoryQueryBuilder;
use Illuminate\Http\Request;
use App\Http\Requests\News\Store;
use App\Http\Requests\News\Update;
use App\Models\Blog\News;

class NewsController extends Controller
{

    public function __construct(
        private NewsQueryBuilder $newsQueryBuilder,
        private CategoryQueryBuilder $categoryQueryBuilder
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => $this->newsQueryBuilder->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create', [
            'categories' => $this->categoryQueryBuilder->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        $this->newsQueryBuilder->create($request);
        return redirect(route('admin.news.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $this->categoryQueryBuilder->all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, News $news)
    {
        $this->newsQueryBuilder->update($request, $news);

        return redirect(route('admin.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $this->newsQueryBuilder->delete($news);

        return redirect(route('admin.news.index'));
    }
}
