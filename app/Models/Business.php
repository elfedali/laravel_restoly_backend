<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",

        "phone_one",
        "phone_two",

        "email",

        "is_verified",
        "is_active",

        "without_reservation",

        "address",
        "city",
        "state",
        "zip",
        "country",
        "logo",

        "website",
        "facebook",
        "twitter",
        "instagram",
        "linkedin",
        "youtube",

        "category_id",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
