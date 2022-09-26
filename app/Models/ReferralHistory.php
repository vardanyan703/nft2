<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralHistory extends Model
{
    use HasFactory;

    protected $perPage = 5;


    protected $fillable = [
       'user_id',
       'referral_id',
       'referral_deposit_cash_back',
       'level',
    ];


    public static function getReferralHistories($filter){
       return self::query()
          ->whereRelation('users','id',auth()->user()->id)
          ->with(['referrals' => function($query){
               return $query->select('id','name');
          }])
          ->filter($filter)
          ->orderBy('id','desc')
          ->paginate();
    }

    public function scopeFilter($query,$filters){

       return $filters->apply($query);
    }


    public function referrals(){
       return $this->hasOne(User::class,'id','referral_id');
    }

    public function users(){
       return $this->hasMany(User::class,'id','user_id');
    }


}
