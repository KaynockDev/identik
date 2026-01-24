<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrustPilot extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'trustpilot_id',
        'name',
        'title',
        'content',
        'rating',
        'review_date'
    ];
}
