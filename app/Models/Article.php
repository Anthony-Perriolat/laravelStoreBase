<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function categoryArticles()
    {
        return $this->belongsTo(CategoryArticles::class);
    }

    public function commentaryArticle()
    {
        return $this->hasMany(CommentaryArticle::class);
    }
}
