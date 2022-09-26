<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTariff extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const START = 'Works';
    const STOP = 'Closed';

    public function tariff(){
        return $this->belongsTo(Tariff::class,'tariff_id','id');
    }
}
