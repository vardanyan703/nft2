<?php

namespace App\Orchid\Resources;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('title')
                    ->title('Title')
                    ->placeholder('Enter title here'),

                Input::make('slug')
                    ->title('Slug')
                    ->placeholder('Enter slug here'),
            ]),
            Quill::make('desc')
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
            TD::make('id', 'ID')->filter(),
            TD::make('title', 'Title')->sort()->filter(),
            TD::make('desc', 'Description')->render($this->showDescription(15)),
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
            Sight::make('id'),
            Sight::make('title'),
            Sight::make('desc')->render($this->showDescription()),
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
            'slug' => [
                'required',
                Rule::unique(self::$model, 'slug')->ignore($model)
            ],
        ];
    }


    /**
     * Get the resource should be displayed in the navigation
     *
     * @return bool
     */
    public static function displayInNavigation(): bool
    {
        return false;
    }

    public static function perPage(): int
    {
        return 1;
    }

    /**
     * @param $word_count
     * @return \Closure
     */
    private function showDescription($word_count = null): \Closure
    {
        return fn($post) => view('quill.template', [
            'desc' => Str::words($post->desc, $word_count)
        ]);
    }
}
