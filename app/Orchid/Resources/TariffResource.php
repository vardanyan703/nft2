<?php

namespace App\Orchid\Resources;

use App\Models\Tariff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class TariffResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Tariff::class;

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
                ->acceptedFiles('image/*')
                ->horizontal(),

            Input::make('name')
                ->title('Tariff title')
                ->placeholder('Test tariff')
                ->horizontal()
                ->required(true),
            Input::make('home_page_name')
                ->title('Name in home page')
                ->placeholder('Home page name')
                ->horizontal()
                ->required(true),

            Input::make('token_bid')
                ->title('Tariff Bid (%)')
                ->placeholder('124')
                ->type('number')
                ->step('0.1')
                ->horizontal()
                ->required(true),

            Input::make('period')
                ->title('Period (h.)')
                ->placeholder('24')
                ->type('number')
                ->horizontal()
                ->required(true),

            Input::make('interval')
                ->title('Interval (h.)')
                ->placeholder('24')
                ->type('number')
                ->horizontal()
                ->required(true),

            Input::make('deposit')
                ->title('Deposit')
                ->placeholder('included')
                ->horizontal()
                ->required(true),

            Input::make('min_price')
                ->title('Min ($)')
                ->type('number')
                ->placeholder('Min price')
                ->horizontal()
                ->required(true),

            Input::make('max_price')
                ->title('Max ($)')
                ->type('number')
                ->placeholder('Max price')
                ->horizontal()
                ->required(true),

            CheckBox::make('published')
                ->title('Publish')
                ->horizontal()
                ->placeholder('Enable Tariff')
                ->sendTrueOrFalse()
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
            TD::make('Image')
                ->render(function ($model) {
                    return "<img src='" . $model->attachment[0]->url() . "' width='100'>";
                }),

            TD::make('name', 'Name')->width(250),
            TD::make('home_page_name', 'Home page name'),
            TD::make('token_bid', 'Token Bid')->render(function ($model){
               return $this->concatPercentSymbol($model->token_bid);
            }),
            TD::make('period', 'Period')->render(function ($model){
               return $this->changeText($model->period);
            }),
            TD::make('interval', 'Interval')->render(function ($model){
               return $this->changeText($model->interval);
            }),
            TD::make('deposit', 'Deposit'),
            TD::make('min_price', 'Min Price')->render(function ($model){
               return $this->concatCurrencySymbol($model->min_price);
            }),
            TD::make('max_price', 'Max Price')->render(function ($model){
               return $this->concatCurrencySymbol($model->max_price);
            }),

            TD::make('Publish')
                ->render(function ($model) {
                    return CheckBox::make('published')
                        ->value($model->published)
                        ->disabled(true);
                })
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
            Sight::make('home_page_name', 'Hom epage name'),
            Sight::make('token_bid', 'Token Bid')->render(function ($model){
               return $this->concatPercentSymbol($model->token_bid);
            }),
            Sight::make('period', 'Period')->render(function ($model){
               return $this->changeText($model->period);
            }),
            Sight::make('interval', 'Interval')->render(function ($model){
               return $this->changeText($model->interval);
            }),
            Sight::make('deposit', 'Deposit'),
            Sight::make('min_price', 'Min price')->render(function ($model){
               return $this->concatCurrencySymbol($model->min_price);
            }),
            Sight::make('max_price', 'Max price')->render(function ($model){
               return $this->concatCurrencySymbol($model->max_price);
            }),

            Sight::make('Publish')
                ->render(function ($model) {
                    return CheckBox::make('published')
                        ->value($model->published)
                        ->disabled(true);
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
        return [
            new DefaultSorted('id', 'desc'),
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
            'home_page_name' => ['required'],
            'token_bid' => ['required','gt:0'],
            'period' => ['required','gt:0'],
            'interval' => ['required','gt:0'],
            'deposit' => ['required'],
            'min_price' => ['required','integer','gt:0'],
            'max_price' => ['required','integer','gt:0','gt:model.min_price'],
            'image' => [
                Rule::when(!$model->attachment->count(),function (){
                   return 'required';
                })
            ]
        ];
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

   /**
    *
    * @param $word_count
    * @return \Closure
    */
   private function changeText($text): string
   {
      return $text . 'h.';
   }

   /**
    * @param $text
    * @return string
    */
   private function concatPercentSymbol($text): string
   {
      return $text . '%';
   }

   private function concatCurrencySymbol($text): string
   {
      return $text . '$';
   }


}
