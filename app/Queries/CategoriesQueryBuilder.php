<?php

namespace App\Queries;

use App\Models\Blog\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CategoriesQueryBuilder extends QueryBuilder
{
    public function getModel(): Builder
    {
        return Category::query();
    }

    public function getAll(): Collection
    {
        return $this->getModel()->get();
    }
}
