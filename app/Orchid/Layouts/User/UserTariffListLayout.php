<?php
declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use App\Facades\CryptoFacade;
use App\Models\Crypto;
use App\Models\Tariff;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class UserTariffListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tariffs';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Crypto')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->name;
                }),

            TD::make('status', 'Status')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->status;
                }),

            TD::make('deposit', 'Deposit')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->deposit;
                }),

            TD::make('total_deposit', 'Total deposit')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->total_deposit;
                }),

            TD::make('created_at', 'Start at')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->created_at;
                }),

            TD::make('stop_at', 'Stop at')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->stop_at;
                }),

            TD::make('txn_id', 'Txn id')
                ->render(function (Tariff $tariffs) {
                    return $tariffs->pivot->txn_id;
                }),

        ];
    }
}
