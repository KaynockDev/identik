<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy([SortScope::class])]
class Banner extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'subtitle', 
        'description',
        'title_en',
        'subtitle_en',
        'description_en',
        'sort'
    ];
}
