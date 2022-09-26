<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28.07.2022
 * Time: 15:20
 */

namespace App\Filters;


use Illuminate\Support\Facades\Schema;

class QueryFilter
{
   public function apply($query)
   {
      foreach ($this->receivedFilters() as $name => $value) {
         $filterInstance = new $this->filters[$name];
         $query = $filterInstance($query, $value, $this->receivedFilterField());
      }

      return $query;
   }


   public function receivedFilters()
   {
      return request()->only(array_keys($this->filters));
   }

}