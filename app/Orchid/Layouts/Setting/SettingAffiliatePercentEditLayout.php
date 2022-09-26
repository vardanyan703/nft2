<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Setting;


use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class SettingAffiliatePercentEditLayout extends Rows
{

    public function fields(): array
    {
        return [
          Input::make('setting.affiliate_percent.level_1')
            ->type('text')
            ->max(255)
            ->title(__('Level 1'))
            ->placeholder(__('Level 1')),
          Input::make('setting.affiliate_percent.level_2')
            ->type('text')
            ->max(255)
            ->title(__('Level 2'))
            ->placeholder(__('Level 2')),
          Input::make('setting.affiliate_percent.level_3')
            ->type('text')
            ->max(255)
            ->title(__('Level 3'))
            ->placeholder(__('Level 3')),
          Input::make('setting.affiliate_percent.level_4')
            ->type('text')
            ->max(255)
            ->title(__('Level 4'))
            ->placeholder(__('Level 4')),

        ];
    }

}