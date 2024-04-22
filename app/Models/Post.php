<?php

namespace App\Models;

use App\Models\Hastag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category', 'hastag'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hastag()
    {
        return $this->hasMany(Hastag::class);
    }
}
