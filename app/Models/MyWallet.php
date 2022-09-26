<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class MyWallet extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $guarded = ['id'];

   protected $allowedFilters = [
      'id',
      'user_id',
   ];


   public static function boot()
   {
      parent::boot();

      self::creating(function ($model){
         $model->user_id = auth()->user()->id;
      });
   }


   public function crypto():BelongsTo
   {
      return $this->belongsTo(Crypto::class,'crypto_id','id');
   }

   public function user():BelongsTo
   {
      return $this->belongsTo(User::class,'user_id','id');
   }
}
