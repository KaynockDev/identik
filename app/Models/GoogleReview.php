<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'google_review_id',
        'name',
        'title',
        'content',
        'rating',
        'profile_photo_url',
        'review_date',
    ];

    protected $casts = [
        'review_date' => 'date',
        'rating' => 'integer',
    ];
}
