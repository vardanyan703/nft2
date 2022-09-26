<?php

namespace App\Orchid\Resources;

use App\Models\ApiKey;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;


class ApiKeyResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ApiKey::class;

   /**
    * @return string
    */
    public static function icon(): string
    {
       return 'key';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
           Input::make('public_key')
              ->title('Public key')
              ->placeholder('Public key')
              ->horizontal()
              ->required(true),
           Input::make('private_key')
              ->title('Private key')
              ->placeholder('Private key')
              ->horizontal()
              ->required(true),
           Input::make('ipn_secret')
              ->title('Ipn secret')
              ->placeholder('Ipn secret')
              ->horizontal()
              ->required(true),
           Input::make('ipn_url')
              ->title('Ipn url')
              ->placeholder('Ipn url')
              ->horizontal()
              ->required(true),
           Input::make('marchant_id')
              ->title('Marchant id')
              ->placeholder('Marchant id')
              ->horizontal()
              ->required(true),
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
            TD::make('public_key','Public key'),
            TD::make('private_key','Private key'),
            TD::make('ipn_secret','Ipn secret'),
            TD::make('ipn_url','Ipn url'),
            TD::make('marchant_id','Marchant id'),
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
           Sight::make('public_key', 'Public key'),
           Sight::make('private_key', 'Private key'),
           Sight::make('ipn_secret','Ipn secret'),
           Sight::make('ipn_url','Ipn url'),
           Sight::make('marchant_id','Marchant id'),
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

   public function rules(Model $model): array
   {
      return [
         'public_key' => ['required','string'],
         'private_key' => ['required','string'],
         'ipn_secret' => ['required','string'],
         'ipn_url' => ['required','string'],
         'marchant_id' => ['required','string'],
      ];
   }

   public function onSave(ResourceRequest $request, Model $model)
   {

      if (count($model->toArray()) === 0){
         $model->newQuery()->get()->each(function ($item){
            return $item->delete();
         });
         return $model->forceFill($request->validated()['model'])
               ->save();
      }

      return $model->forceFill($request->validated()['model'])
            ->save();
   }
}
