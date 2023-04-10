<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",
        "icon",
        "image",
        "color",
        "position",
        "is_active",
        "business_id"
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
