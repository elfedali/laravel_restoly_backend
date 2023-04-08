<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = [
        "day_of_week",
        "open_time",
        "close_time",
        "business_id"
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
