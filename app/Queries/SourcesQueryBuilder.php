<?php

namespace App\Queries;

use App\Models\Blog\Source;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class SourcesQueryBuilder extends QueryBuilder
{
    public function getModel(): Builder
    {
        return Source::query();
    }

    public function getAll(): Collection
    {
        return $this->getModel()->with('news')->get();
    }
}
