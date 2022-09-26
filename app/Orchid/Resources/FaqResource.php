<?php

namespace App\Orchid\Resources;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class FaqResource extends Resource
{
   /**
    * The model the resource corresponds to.
    *
    * @var string
    */
   public static $model = Faq::class;


   /**
    * Get the displayable icon of the resource.
    *
    * @return string
    */
   public static function icon(): string
   {
      return 'info';
   }

   /**
    * Get the fields displayed by the resource.
    *
    * @return array
    */
   public function fields(): array
   {
      return [
         Matrix::make('list')
            ->title('Faq list')
            ->columns(['question', 'answer','left','right'])
            ->fields([
               'question'   => Input::make()->required(),
               'answer' => TextArea::make()->required(),
               'left' => CheckBox::make()
                  ->help('Left side')
                  ->sendTrueOrFalse(),
               'right' => CheckBox::make()
                  ->help('Right side')
                  ->sendTrueOrFalse()
            ]),
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

         TD::make('list','FAQ')->render(function ($model){
            return 'Faq';
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
      return [
         Sight::make('list','List')->render(function ($model){
            return view('admin.show_faq',['list' => $model->list]);
         })
      ];
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
}
