<?php

namespace App\Orchid\Resources;

use App\Models\MyWallet;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\TD;

class MyWalletResource extends Resource
{
   /**
    * The model the resource corresponds to.
    *
    * @var string
    */
   public static $model = MyWallet::class;


   /**
    * Get the displayable icon of the resource.
    *
    * @return string
    */
   public static function icon(): string
   {
      return 'wallet';
   }

   /**
    * Get the fields displayed by the resource.
    *
    * @return array
    */
   public function fields(): array
   {
       $my_wallet = MyWallet::query()->where('id',request()->segment(6))->with('user','crypto')->first();
      return [
         Input::make('wallet_number')->title('Wallet number')->disabled(),
         Input::make('tag')->title('Tag')->disabled(),
         CheckBox::make('editing')->title('Can Edit')
            ->sendTrueOrFalse()
        ->help('Change ' .$my_wallet->crypto->name. ' edit mode for this user '. $my_wallet->user->name)
      ];
   }

   /**
    * Get the columns displayed by the resource.
    *
    * @return TD[]
    */
   public function columns(): array
   {
      return [
         TD::make('user_id', 'User')
            ->render(function ($model){
               return $model->user->name;
            }),
         TD::make('crypto_id', 'Wallet type')->render(function ($model){
            return $model->crypto->name;
         }),

         TD::make('wallet_number', 'Wallet number'),
         TD::make('tag', 'Tag'),
         TD::make('editing', 'Editing')->render(function ($model){
            return $model->editing ? 'Yes' : 'No';
         }),

         TD::make('created_at', 'Date of creation')
            ->render(function ($model) {
               return $model->created_at->toDateTimeString();
            })
            ->defaultHidden(),

         TD::make('updated_at', 'Update date')
            ->render(function ($model) {
               return $model->updated_at->toDateTimeString();
            })
            ->defaultHidden(),
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
      return [
         new DefaultSorted('id', 'desc')
      ];
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
