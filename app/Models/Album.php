<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Album extends Model
{
    use HasFactory;

    public function photo(): HasMany
    {
        return $this->hasMany(App\Models\Photo::class, 'id_album', 'id');
    }

    public function comment(): HasMany
    {
        return $this->hasMany(App\Models\PhotoComment::class, 'id_album', 'id');
    }
}
