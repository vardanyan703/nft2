<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use App\Models\Crypto;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class UserAddDepositLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [

            Select::make('network')
                ->fromModel(Crypto::class, 'network','network'),

            Input::make('sum')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Amount ($)'))

        ];
    }
}
