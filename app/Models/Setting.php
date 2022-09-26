<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Setting extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $guarded = ['id'];

    protected $casts = [
      'affiliate_percent' => 'array'
    ];
}
