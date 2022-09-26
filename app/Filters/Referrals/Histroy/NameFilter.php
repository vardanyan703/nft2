<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2022
 * Time: 19:36
 */

namespace App\Filters\Referrals\Histroy;


class NameFilter
{

   public function __invoke($query, $name,$type)
   {
      return $query->whereHas('referrals',function ($q) use ($type,$name){
         return $q->where($type, 'like', '%'.$name.'%');
      });
   }
}