<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'rating',
        'business_id',
        'user_id',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRatingAttribute($value)
    {
        return (int) $value;
    }

    public function setRatingAttribute($value)
    {
        $this->attributes['rating'] = (int) $value;
    }
}
