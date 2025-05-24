<?php

namespace App\Models;

use App\Livewire\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function author() : BelongsTo
    {
        return $this->belongsTo(User::class ,'author_id');
    }

    public function comments() : HasMany
    {
        return $this->hasMany(Comments::class);
    }

    public function categories() : BelongsToMany
    {
        return $this->belongsToMany(Category::class ,'category_post' , 'article_id' , 'category_id');
    }
}
