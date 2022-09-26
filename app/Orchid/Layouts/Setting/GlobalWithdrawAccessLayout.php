<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Setting;

use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class GlobalWithdrawAccessLayout extends Rows
{

    private $setting;

    public function fields(): array{

        $this->setting = $this->query->get('setting');

        return [
          CheckBox::make('setting.is_withdraw')
            ->value($this->setting['is_withdraw'])
            ->title($this->setting['is_withdraw'] ? 'Disable withdraw access' : 'Enable withdraw access')
            ->sendTrueOrFalse()
        ];
    }

}