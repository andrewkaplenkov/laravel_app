<?php

namespace App\Models\Blog;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'image', 'user_id', 'status'
    ];


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'category_has_news',
            'news_id',
            'category_id'
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
