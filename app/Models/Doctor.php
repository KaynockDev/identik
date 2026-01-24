<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Spatie\Translatable\HasTranslations;


#[ScopedBy([SortScope::class])]
class Doctor extends Model
{
    use HasTranslations;

    public $timestamps = false;

    use HasFactory;

    public $translatable = ['name', 'role', 'description', 'content'];

}
