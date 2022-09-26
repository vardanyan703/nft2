<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.07.2022
 * Time: 15:42
 */

namespace App\Filters\Referrals;


class NameFilter
{

   function __invoke($query, $name,$type)
   {
      return $query->where($type, 'like', '%'.$name.'%');
   }
}