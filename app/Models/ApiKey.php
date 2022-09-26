<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;


class ApiKey extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'public_key',
        'private_key'
    ];
}
