<?php

namespace App\Queries;

use App\Http\Requests\News\Store;
use App\Http\Requests\News\Update;
use App\Models\Blog\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class NewsQueryBuilder
{

    public function model(): Builder
    {
        return News::query();
    }

    public function all(): Collection | array
    {

        $news = News::with(['categories', 'user'])->get();

        if (request('category') !== null) {
            $filtered = [];
            foreach ($news as $item) {
                foreach ($item->categories as $categoryObj) {
                    if (in_array(request('category'), $categoryObj->toArray())) {
                        $filtered[] = $item;
                    }
                }
            }
            return $filtered;
        }

        return $news;
    }

    public function create(Store $request)
    {
        $data = $request->validated();
        $categories = $data['categories'];
        $user_id = User::where('name', $data['author'])->first()->id;

        unset($data['categories']);
        $data['user_id'] = $user_id;

        News::create($data)->categories()->attach($categories);
    }

    public function update(Update $request, News $news)
    {
        $data = $request->validated();
        $categories = $data['categories'];
        unset($data['categories']);

        $news->update($data);
        $news->categories()->sync($categories);
    }

    public function delete(News $news)
    {
        DB::table('category_news')->where('news_id', $news->id)->delete();
        News::where('id', $news->id)->delete();
    }
}
