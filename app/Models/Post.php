<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'slug',
        'body'
    ];

    protected $with = ['author','category'];

    public function author():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query,array $filters) 
    {
        $query->when($filters['search'] ?? false, function($query) use ($filters) {
            $query->where('title','like','%' . $filters['search'] . '%');
        });

        $query->when($filters['category'] ?? false, function($query) use ($filters) {
            $query->whereHas('category', function($query) use ($filters) {
                $query->where('slug', $filters['category']);
            });
        });

           $query->when($filters['author'] ?? false, function($query) use ($filters) {
            $query->whereHas('author', function($query) use ($filters) {
                $query->where('username', $filters['author']);
            });
        });
    }
}
