<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class News extends Model
{
   use HasFactory,AsSource, Filterable, Attachable;

   protected $fillable = [
      'name',
      'text'
   ];


   public function getCreatedAtAttribute($value){
      return Carbon::parse($value)->format('Y.m.d H:i');
   }
}
