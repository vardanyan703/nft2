<?php

namespace App\Orchid\Resources;

use App\Models\Support;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;

class SupportResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Support::class;


   /**
    * Get the displayable icon of the resource.
    *
    * @return string
    */
   public static function icon(): string
   {
      return 'support';
   }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('user_id','User')->render(function ($model){
               return $model->user->name;
            }),
            TD::make('email','Email')->render(function ($model){
               return $model->user->email;
            }),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    public function with(): array
    {
       return ['user'];
    }

    public static function perPage(): int
    {
       return 10;
    }
}
