<?php

namespace App\Models;

use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;

#[ScopedBy([SortScope::class])]
class Smile extends Model
{
    use HasFactory;



}
