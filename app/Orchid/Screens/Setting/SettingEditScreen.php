<?php

namespace App\Orchid\Screens\Setting;

use App\Http\Requests\SettingPercentRequest;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Orchid\Layouts\Setting\GlobalWithdrawAccessLayout;
use App\Orchid\Layouts\Setting\SettingAffiliatePercentEditLayout;
use App\Orchid\Layouts\Setting\WithDrawLimitLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SettingEditScreen extends Screen
{

    public $setting;

    /**
     * @param Setting $setting
     * @return iterable
     */
    public function query(Setting $setting): iterable
    {
        return [
          'setting' => $setting
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->setting->exists ? 'Edit Setting' : 'Create Setting';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
          Layout::block(SettingAffiliatePercentEditLayout::class)
            ->title(__('Affiliate percents'))
            ->description(__('Affiliate program percents'))
            ->commands(
              Button::make(__('Update'))
                ->type(Color::DEFAULT())
                ->icon('check')
                ->method('save')
            ),

          Layout::block(GlobalWithdrawAccessLayout::class)
            ->title(__('Withdraw Access'))
            ->description(__('If you enable the checkbox, then all users will not be able to withdraw their money from their balance'))
            ->commands(
              Button::make(__('Update'))
                ->type(Color::DEFAULT())
                ->icon('check')
                ->method('save')
            ),

          Layout::block(WithDrawLimitLayout::class)
            ->title(__('Withdraw Limit'))
            ->commands(
              Button::make(__('Update'))
                ->type(Color::DEFAULT())
                ->icon('check')
                ->method('save')
            ),

        ];
    }


    public function save(Setting $setting, SettingRequest $request){

        $data = $request->validated()['setting'];
        $setting->update($data);

        Toast::info(__('Successfully updated.'));

        return back();

    }

}
