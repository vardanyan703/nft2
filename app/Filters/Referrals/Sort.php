<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.07.2022
 * Time: 19:07
 */

namespace App\Filters\Referrals;


class Sort
{
   function __invoke($query, $name,$type)
   {
      return $query->orderBy('id',$name);
   }
}