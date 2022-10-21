<?php

declare(strict_types=1);

namespace App\Orchid\Filters;

use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;

class NameFilter extends Filter
{

    public function name(): string
    {
        return __('Name');
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['name'];
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
//        dd($this->request->get('name'));
//        dd($builder->where('name','like', "%".$this->request->get('name')."%"));
        return $builder->where('name','like', "%".$this->request->get('name')."%");
    }

    /**
     * @return Field[]
     */
    public function display(): array
    {
        return [
          Input::make('name')->empty()->title(__('Name')),
//          Select::make('role')
//            ->fromModel(Role::class, 'name', 'slug')
//            ->empty()
//            ->value($this->request->get('role'))
//            ->title(__('Roles')),
        ];
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->name();
    }
}