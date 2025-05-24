<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;


    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'category_post');
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tags::class, 'category_post');
    }


}
