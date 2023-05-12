<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "description",
        "is_active",
        "language"
    ];

    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
}
