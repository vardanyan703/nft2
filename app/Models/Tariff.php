<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Tariff extends Model
{
    use HasFactory,AsSource, Filterable, Attachable;

    const CREATED = 'created';

    protected $fillable = [
        'name',
        'home_page_name',
        'token_bid',
        'period',
        'interval',
        'deposit',
        'min_price',
        'max_price',
    ];

    public static function money_format($money){
        if($money == 10000 || $money == 100000 || $money == 1000000){
            return ($money / 1000) .'K';
        }

        if($money > 1000000){
            return ($money / 1000000) .'M';
        }

        return $money;
    }


}
