<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hastag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['post'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
