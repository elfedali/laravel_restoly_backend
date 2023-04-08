<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",
        "image",
        "color",
        "position",
        "is_active",
        "menu_id"
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
