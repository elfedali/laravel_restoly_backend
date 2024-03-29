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

    const ROLE_SUPERADMIN = 'super_admin';
    const ROLE_ADMIN = 'admin';
    const ROLE_SUBSCRIBER = 'subscriber';

    const ROLES = [
        self::ROLE_SUPERADMIN,
        self::ROLE_ADMIN,
        self::ROLE_SUBSCRIBER,
    ];
    // when creating a new user, the default role is subscriber
    protected $attributes = [
        'role' => self::ROLE_SUBSCRIBER,
    ];
    // create a profile for the user when creating a new user
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->profile()->create();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'role',
        'is_active',
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
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // lowercase the email before saving it to the database
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
