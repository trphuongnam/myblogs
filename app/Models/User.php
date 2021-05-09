<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function posts(): HasMany
    {
        return $this->hasMany(App\Models\Post::class, 'id_user', 'id');
    }
   
    public function comments(): HasMany
    {
        return $this->hasMany(App\Models\PostComment::class, 'id_user', 'id');
    }

    public function photos(): HasMany
    {
        return $this->hasMany(App\Models\Photo::class, 'id_user', 'id');
    }

    public function albums(): HasMany
    {
        return $this->hasMany(App\Models\Album::class, 'id_user', 'id');
    }
}
