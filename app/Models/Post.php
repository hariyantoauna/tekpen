<?php

namespace App\Models;

use App\Models\User;
use App\Models\Hastag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category', 'hastag', 'author'];

    public function scopeFilter($query, array $filters)
    {


        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('article', 'like', '%' . $search . '%');
        });

        $query->when(
            $filters['hastag'] ?? false,
            fn ($query, $hastag) =>
            $query->whereHas(
                'hastag',
                fn ($query) =>
                $query->where('hastag', $hastag)
            )
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas(
                'category',
                fn ($query) =>
                $query->where('category_slug', $category)
            )
        );
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hastag()
    {
        return $this->hasMany(Hastag::class);
    }
}