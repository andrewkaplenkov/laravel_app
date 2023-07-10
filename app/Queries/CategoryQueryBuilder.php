<?php

namespace App\Queries;

use App\Http\Requests\Category\Store;
use App\Http\Requests\Category\Update;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class CategoryQueryBuilder
{

    public function model(): Builder
    {
        return Category::query();
    }

    public function all(): Collection
    {
        return Category::all();
    }


    public function create(Store $request)
    {
        $data = $request->validated();
        Category::create($data);
    }

    public function update(Update $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);
    }

    public function delete(Category $category)
    {
        DB::table('category_news')->where('category_id', $category->id)->delete();
        Category::where('id', $category->id)->delete();
    }
}
