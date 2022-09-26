<?php

namespace App\Orchid\Resources;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class NewsResource extends Resource
{
   /**
    * The model the resource corresponds to.
    *
    * @var string
    */
   public static $model = News::class;


   /**
    * @return string
    */
   public static function icon(): string
   {
      return 'speech';
   }

   /**
    * Get the fields displayed by the resource.
    *
    * @return array
    */
   public function fields(): array
   {
      return [


         Upload::make('image')
            ->maxFiles(1)
            ->parallelUploads(1)
            ->title('Image')
            ->acceptedFiles('image/*'),

         Input::make('name')
            ->required()
            ->title('Name')
            ->placeholder('Enter name here'),

         Quill::make('text')
            ->required()
            ->title('Text')
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
         TD::make('Image')
            ->render(function ($model) {
               return "<img src='" . $model->attachment[0]->url() . "' width='100'>";
            }),
         TD::make('name'),
         TD::make('text')
            ->width(300)
            ->render($this->showDescription(15)),


         TD::make('created_at', 'Date of creation')
            ->defaultHidden(),

         TD::make('updated_at', 'Update date')
            ->defaultHidden()
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
         Sight::make('Image')
            ->render(function ($model) {
               return "<img src='" . $model->attachment[0]->url() . "' width='100'>";
            }),
         Sight::make('name', 'Name'),
         Sight::make('text', 'Text')->render(function ($model) {
            return view('quill.template', ['desc' => $model->text]);
         }),
      ];
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

   /**
    * Get the validation rules that apply to save/update.
    *
    * @return array
    */
   public function rules(Model $model): array
   {
      return [
         'name' => ['required'],
         'text' => ['required'],
         'image' => [
            Rule::when(!$model->attachment->count(),function (){
               return 'required';
            })
         ]
      ];
   }


   /**
    * @param null $word_count
    * @return \Closure
    */
   private function showDescription($word_count = null): \Closure
   {
      return fn($post) => view('quill.template', [
         'desc' => Str::words($post->text, $word_count)
      ]);
   }

   public function onSave(ResourceRequest $request, Model $model)
   {

      $model->forceFill($request->except('image'))
         ->save();

      if($attachment = $request->get('image',null)){
         if($model->attachment->count()){
            // @todo надо думать как удалит фйал и папки при удаления
         }

         $model->attachment()->sync($attachment[0]);
      }

   }


   public function with(): array
   {
      return ['attachment'];
   }


}
