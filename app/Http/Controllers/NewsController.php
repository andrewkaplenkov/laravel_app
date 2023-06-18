<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {

        $model = app(News::class);
        // dd($model->getNews());
        return view('news/index', [
            'newsList' => $model->getNews()
        ]);
    }

    public function show(int $id)
    {
        $model = app(News::class);
        // dd($model->getNewsById($id));

        return view('news/show', [
            'news' => $model->getNewsById($id)
        ]);
    }
}
