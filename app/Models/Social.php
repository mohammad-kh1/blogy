<?php
namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    /** @use HasFactory<\Database\Factories\SocialFactory> */
    use HasFactory;

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    protected $table = "socials";
}
