<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Photo extends Model
{
    use HasFactory;

    public function photocomment(): HasMany
    {
        return $this->hasMany(App\Models\PhotoComment::class, 'id_photos', 'id');
    }
}
