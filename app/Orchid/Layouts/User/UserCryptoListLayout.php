<?php
declare(strict_types=1);

namespace App\Orchid\Layouts\User;

use App\Facades\CryptoFacade;
use App\Models\Crypto;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class UserCryptoListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'userModel';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Crypto')
                ->render(function (Crypto $userModel) {
                    return $userModel->name;
                }),

            TD::make('deposit', 'Deposit')
                ->render(function (Crypto $userModel) {
                    return ModalToggle::make(number_format($userModel->pivot->deposit, 2)  . ' ($'. number_format(CryptoFacade::xChangeToUSDT($userModel->pivot->deposit, $userModel->network, 'USD'),2) .')' )
                        ->modal('asyncEditUserDepositModal')
                        ->modalTitle($userModel->name)
                        ->method('changeDeposit')
                        ->asyncParameters([
                            'user' => $userModel->pivot->user_id,
                            'crypto_id' => $userModel->pivot->crypto_id,
                            'network' => $userModel->network,
                            'type' => 'deposit'
                        ]);
                }),

            TD::make('balance', 'Balance')
                ->render(function (Crypto $userModel) {
                    return ModalToggle::make(number_format($userModel->pivot->balance, 2) .' ($'. number_format(CryptoFacade::xChangeToUSDT($userModel->pivot->balance, $userModel->network, 'USD'),2) .')' )
                        ->modal('asyncEditUserDepositModal')
                        ->modalTitle($userModel->name)
                        ->method('changeDeposit')
                        ->asyncParameters([
                            'user' => $userModel->pivot->user_id,
                            'crypto_id' => $userModel->pivot->crypto_id,
                            'network' => $userModel->network,
                            'type' => 'balance'
                        ]);
                }),

            TD::make('earned_total', 'Earned total')
                ->render(function (Crypto $userModel) {
                    return ModalToggle::make(number_format($userModel->pivot->earned_total, 2) . ' ($'. number_format(CryptoFacade::xChangeToUSDT($userModel->pivot->earned_total, $userModel->network, 'USD'),2) .')' )
                        ->modal('asyncEditUserDepositModal')
                        ->modalTitle($userModel->name)
                        ->method('changeDeposit')
                        ->asyncParameters([
                            'user' => $userModel->pivot->user_id,
                            'crypto_id' => $userModel->pivot->crypto_id,
                            'network' => $userModel->network,
                            'type' => 'earned_total'
                        ]);
                }),

            TD::make('updated_at', 'Updated at')
                ->render(function (Crypto $userModel) {
                    return $userModel->pivot->updated_at;
                }),

            TD::make('created_at', 'Created at')
                ->render(function (Crypto $userModel) {
                    return $userModel->pivot->created_at;
                }),

        ];
    }
}
