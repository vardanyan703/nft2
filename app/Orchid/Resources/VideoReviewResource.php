<?php

namespace App\Orchid\Resources;

use App\Models\VideoReview;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class VideoReviewResource extends Resource
{
   /**
    * The model the resource corresponds to.
    *
    * @var string
    */
   public static $model = VideoReview::class;

   /**
    * Get the displayable icon of the resource.
    *
    * @return string
    */
   public static function icon(): string
   {
      return 'youtube';
   }

   /**
    * Get the fields displayed by the resource.
    *
    * @return array
    */
   public function fields(): array
   {
      return [
         Input::make('title')
            ->required()
            ->title('Title')
            ->placeholder('Enter title here'),

         Input::make('link')
            ->required()
            ->title('Link')
            ->placeholder('Enter link here'),
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
         TD::make('id'),
         TD::make('title'),
         TD::make('link'),

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
      return [
         Sight::make('title','Title'),
         Sight::make('link','Link')
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


   /**
    * @param Model $model
    * @return array
    */
   public function rules(Model $model): array
   {
      return [
         'title' => ['required'],
         'link' => ['required'],
      ];
   }
}
