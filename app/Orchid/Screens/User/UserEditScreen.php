<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Facades\CryptoFacade;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserAddDepositLayout;
use App\Orchid\Layouts\User\UserCryptoListLayout;
use App\Orchid\Layouts\User\UserEditDepositLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use App\Orchid\Layouts\User\UserTariffListLayout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Models\User as UserModel;

class UserEditScreen extends Screen
{
    /**
     * @var User
     */
    public $user;

    /**
     * Query data.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user): iterable
    {
        $user->load(['roles']);

        $userModal = UserModel::query()->where('id', $user->id)->with('cryptos','tariffs')->first();
        return [
            'user' => $user,
            'userModel' => $userModal->cryptos,
            'tariffs' => $userModal->tariffs,
            'permission' => $user->getStatusPermission(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->user->exists ? 'Edit User' : 'Create User';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Details such as name, email and password';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Crypto')
                ->icon('dollar')
                ->modal('asyncAddUserDepositModal')
                ->modalTitle('Add Crypto')
                ->method('changeDeposit')
                ->asyncParameters([
                    'user' => $this->user->id,
                    'type' => 'add deposit'
                ]),

            Button::make(__('Impersonate user'))
                ->icon('login')
                ->confirm('You can revert to your original state by logging out.')
                ->method('loginAs')
                ->canSee($this->user->exists && \request()->user()->id !== $this->user->id),

            Button::make(__('Remove'))
                ->icon('trash')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->canSee($this->user->exists),

            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [

            Layout::block(UserEditLayout::class)
                ->title(__('Profile Information'))
                ->description(__('Update your account\'s profile information and email address.'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(UserPasswordLayout::class)
                ->title(__('Password'))
                ->description(__('Ensure your account is using a long, random password to stay secure.'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::block(RolePermissionLayout::class)
                ->title(__('Permissions'))
                ->description(__('Allow the user to perform some actions that are not provided for by his roles'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),

            Layout::view('orchid.title',[
                'title' =>  "User Deposits"
            ]),

            UserCryptoListLayout::class,

            Layout::view('orchid.title',[
                'title' =>  "User Tariffs"
            ]),

            UserTariffListLayout::class,

            Layout::modal('asyncEditUserDepositModal', UserEditDepositLayout::class)
                ->async('asyncGetUser'),

            Layout::modal('asyncAddUserDepositModal', UserAddDepositLayout::class)
                ->async('asyncGetUser'),

        ];
    }

    /**
     * @param User $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(User $user, Request $request)
    {

        $request->validate([
            'user.email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(function ($value, $key) {
                return [base64_decode($key) => $value];
            })
            ->collapse()
            ->toArray();

        $user->when($request->filled('user.password'), function (Builder $builder) use ($request) {
            $builder->getModel()->password = Hash::make($request->input('user.password'));
        });

        $user
            ->fill($request->collect('user')->except(['password', 'permissions', 'roles'])->toArray())
            ->fill(['permissions' => $permissions])
            ->save();

        $user->replaceRoles($request->input('user.roles'));

        Toast::info(__('User was saved.'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     *
     */
    public function remove(User $user)
    {
        $user->delete();

        Toast::info(__('User was removed'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user)
    {
        UserSwitch::loginAs($user);

        Toast::info(__('You are now impersonating this user'));

        return redirect()->route(config('platform.index'));
    }

    public function changeDeposit(Request $request)
    {
        $amount = CryptoFacade::xChangeToUSDT($request->sum, 'USD', $request->network);

        if ($request->get('type') == 'add deposit') {
            UserModel::updateOrAttachCrypto($request->user, $amount, $request->network);
            UserModel::updateOrAttachCryptoBalance($request->user, $request->network, $amount);
            UserModel::updateOrAttachCryptoEarnedTotal($request->user, $request->network, $amount);
            UserModel::updateOrAttachCryptoDeposit($request->user, $request->network, 0);
        }

        if ($request->get('type') == 'deposit') {
            UserModel::updateOrAttachCryptoDeposit($request->user, $request->network, $amount);
        }

        if ($request->get('type') == 'balance') {
            UserModel::updateOrAttachCryptoBalance($request->user, $request->network, $amount);
        }

        if ($request->get('type') == 'earned_total') {
            UserModel::updateOrAttachCryptoEarnedTotal($request->user, $request->network, $amount);
        }
    }

}
