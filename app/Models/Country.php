<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "code",
        "flag",
        "phone_code",
        "currency",
        "currency_symbol",
        "currency_code",
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
