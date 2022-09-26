<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.08.2022
 * Time: 12:31
 */

namespace App\Orchid\Layouts\Setting;


use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class WithDrawLimitLayout extends Rows
{

    public function fields(): iterable
    {
        return [
          Input::make('setting.withdraw_limit')
            ->type('text')
            ->max(255)
            ->title(__('Withdraw Limit'))
            ->placeholder(__('Withdraw Limit')),
        ];
    }

}