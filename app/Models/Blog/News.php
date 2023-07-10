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

    protected $table = 'news';

    protected $fillable = [
        'title', 'body', 'image', 'user_id', 'status', 'published_at'
    ];

    protected $cast = [
        'published_at' => 'timestamp'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
