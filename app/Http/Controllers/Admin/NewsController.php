<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use App\Queries\CategoriesQueryBuilder;
use App\Queries\NewsQueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function __construct(
        private NewsQueryBuilder $newsBuilder,
        private CategoriesQueryBuilder $categoryBuilder
    ) {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => $this->newsBuilder->getAll()
        ]);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $categories = $request->input('categories');
        $user_id = DB::table('users')->where('name', $request->input('author'))->value('id');

        $news = $request->only(['title', 'user_id', 'status', 'body']);
        $news['user_id'] = $user_id;

        $news = News::create($news);
        if ($news !== false) {
            if ($categories !== null) {
                $news->categories()->attach($categories);

                return redirect()->route('admin.news.index')->with('success', 'News has been create');
            }
        }

        return back()->with('error', 'News has not been create');
    }

    public function create()
    {
        return view('admin.news.create', [
            'categories' => $this->categoryBuilder->getAll(),
            'news' => $this->newsBuilder->getAll()
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $this->categoryBuilder->getAll()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $categories = $request->input('categories');

        $user_id = DB::table('users')->where('name', $request->input('author'))->value('id');

        $request['user_id'] = $user_id;

        $news = $news->fill($request->only(['title', 'user_id', 'status', 'body']));


        if ($news->save()) {
            $news->categories()->sync($categories);

            return redirect()->route('admin.news.index')->with('success', 'News has been update');
        }

        return back()->with('error', 'News has not been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        DB::table('news')->delete($news->id);

        return redirect(route('admin.news.index'));
    }
}
