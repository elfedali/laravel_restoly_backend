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

        "is_without_reservation",

        "address",
        "city",
        "zip_code",
        "country",

        "logo",

        "latitude",
        "longitude",

        "website",
        "facebook",
        "twitter",
        "instagram",
        "linkedin",
        "youtube",
        "tiktok",
        "whatsApp",

        "user_id",
        "category_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //business_kitchen
    public function kitchens()
    {
        return $this->belongsToMany(Kitchen::class);
    }
    // business_service
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
