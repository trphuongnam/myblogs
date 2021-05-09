<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function comment(): HasMany
    {
        return $this->hasMany("App\Models\PostComment", 'id_post', 'id');
    }
}
