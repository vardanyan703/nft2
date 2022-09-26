<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03.08.2022
 * Time: 19:33
 */

namespace App\Filters\Referrals\Histroy;


use App\Filters\QueryFilter;
use App\Filters\Referrals\Sort;
use Illuminate\Support\Facades\Schema;

class HistoryFilter extends QueryFilter
{
   protected $filters = [
      'referal_search_val' => NameFilter::class,
      'referal_sort' => Sort::class,
   ];

   protected $filtersField = 'referal_search' ;



   public function receivedFilterField()
   {

      if (request()->only($this->filtersField)){
         if (in_array(request()->only($this->filtersField)[$this->filtersField],Schema::getColumnListing('users'))){
            return request()->only($this->filtersField)[$this->filtersField];
         }
      }


      return 'id';
   }
}