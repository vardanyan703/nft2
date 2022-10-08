<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class WithdrawQuestion extends Model
{
    use HasFactory, AsSource, Filterable;

    protected $guarded = ['id'];

    protected $appends = ['crypto'];

    public const WITHDRAW_QUESTION_STATUSES = [
      'Waiting',
      'COMPLETED',
      'Rejected',
      'Affiliate',
    ];

    public function getCryptoAttribute(){
        return Crypto::query()->where('network',$this->network)->first();
    }
}
