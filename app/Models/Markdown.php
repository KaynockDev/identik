<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Markdown extends Model
{
    use HasTranslations;

    public $timestamps = false;

    use HasFactory;

    public $translatable = ['value'];

}
