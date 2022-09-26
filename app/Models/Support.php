<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Mail;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Support extends Model
{
   use HasFactory, AsSource, Filterable, Attachable;

   public $fillable = ['user_id', 'subject', 'message','email'];

   public static function boot()
   {

      parent::boot();

      self::creating(function ($model) {
         $model->user_id = auth()->user()->id;
      });

      static::created(function ($item) {
         $adminEmail = "help@nftgrower.io";
         Mail::to($adminEmail)->send(new ContactMail($item));
      });
   }

   public function user():BelongsTo {
      return $this->belongsTo(User::class);
   }
}
