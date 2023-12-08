<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
    * Adding my API token
    */
    protected $apiToken = "16|oASU1EIXVJwEesbraJNl385nNElU1cd0i09p3eFF38cbc03e";
    // protected $apiToken = "17|ceGT2b8elntCnbwKXqYfvV2ejnVdR5SFS2za4Ch5991eaa59";
    // protected $apiToken = "18|OY4D8perXxM2SkMR2RwxNhifvEhzmykTrVo8YNePfb21021a";

    public function getToken()
    {
        return $this->apiToken;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
