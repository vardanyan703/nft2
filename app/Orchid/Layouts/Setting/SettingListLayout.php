<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.08.2022
 * Time: 15:18
 */

namespace App\Orchid\Layouts\Setting;

use App\Models\Setting;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;


class SettingListLayout extends Table
{

    public $target = 'settings';

    public function columns(): array
    {
        return [
          TD::make('is_withdraw', __('Title'))->render(function (){
              return 'Withdraw settings';
          }),
          TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function (Setting $setting) {
                return DropDown::make()
                  ->icon('options-vertical')
                  ->list([
                    Link::make(__('Edit'))
                      ->route('platform.settings.edit', $setting->id)
                      ->icon('pencil'),
                  ]);
            }),
        ];
    }

}