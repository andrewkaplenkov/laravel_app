<?php

namespace App\Models;

use App\Enums\NewsStatuses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(bool $isJoin = false): Collection | string
    {
        if ($isJoin) {
            return DB::table($this->table)
                ->select('news.*', 'categories.title as CategoryTitle')
                ->join('category_has_news', 'category_has_news.news_id', '=', 'news.id')
                ->join('categories', 'category_has_news.category_id', '=', 'categories.id')
                ->get();
        }

        return DB::table($this->table)->get();
    }

    public function getNewsById(int $id): mixed
    {
        return DB::table($this->table)->find($id);
    }
}
