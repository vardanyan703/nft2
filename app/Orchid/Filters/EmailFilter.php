<?php

declare(strict_types=1);

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;

class EmailFilter extends Filter
{

    public function name(): string
    {
        return __('Email');
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['email'];
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->where('email','like', "%".$this->request->get('email')."%");
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
          Input::make('email')
            ->empty()
            ->title(__('Email')),
        ];
    }
}