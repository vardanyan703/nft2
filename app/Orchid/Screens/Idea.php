<?php

namespace App\Orchid\Screens;

use App\Models\User;
use DateTimeZone;

use Orchid\Screen\{
    Actions\Button,
    Actions\DropDown,
    Actions\Link,
    Actions\ModalToggle,
    Fields\Cropper,
    Fields\DateRange,
    Fields\Group,
    Fields\Input,
    Fields\Matrix,
    Fields\NumberRange,
    Fields\Picture,
    Fields\Relation,
    Fields\Select,
    Fields\TextArea,
    Fields\TimeZone,
    Fields\Upload,
    Screen,
    };
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class Idea extends Screen
{
    public string $name;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'name' => 'Alexandr Chernyaev',
            'users' => User::get()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return "Idea " . $this->name;
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "Idea Screen";
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Go print')->method('print'),
            Link::make('External reference')
                ->href('http://orchid.software'),
            ModalToggle::make('Modal window')
                ->modal('CreateUserModal')
                ->method('save')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::modal('CreateUserModal', [
                Layout::rows([]),
            ]),
            Layout::rows([
                Input::make('name')->vertical(),
                Input::make('name')->horizontal()->canSee(false),
                Input::make('price')
                    ->title('Price')
                    ->mask([
                        'alias' => 'currency',
                        'prefix' => ' ',
                        'groupSeparator' => ' ',
                        'digitsOptional' => true,
                    ]),
                Select::make('select')
                    ->fromModel(User::class, 'email')
                    ->empty(''),

                Relation::make('users.')
                    ->fromModel(User::class, 'name')
                    ->searchColumns('email', 'id')
                    ->chunk('1'),

                DateRange::make('open')
                    ->title('Opening between'),

                TimeZone::make('time')
                    ->listIdentifiers(DateTimeZone::ALL),

                Matrix::make('options')
                    ->title('Users list')
                    ->columns(['id', 'name'])
                    ->fields([
                        'id' => Input::make()->type('number'),
                        'name' => TextArea::make(),
                    ]),


                Picture::make('picture'),
                Cropper::make('picture')
                    ->minCanvas(500)
                    ->maxWidth(1000)
                    ->maxHeight(800),

                Upload::make('upload')
                    ->media(),

                Group::make([
                    Input::make('first_name'),
                    Input::make('last_name'),
                ])->autoWidth(),

                ModalToggle::make('Add Payment')
                    ->modal('addNewPayment')
                    ->icon('wallet'),

                DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.systems.users.edit', 5)
                            ->icon('pencil'),
                        Button::make(__('Delete'))
                            ->method('remove')
                            ->icon('trash')
                            ->confirm(__('Are you sure you want to delete the user?'))
                            ->parameters([
                                'id' => 5,
                            ]),
                    ]),


                NumberRange::make(''),

            ]),
        ];
    }


    public function save()
    {
        Toast::warning('Hello, world! This is a toast message.');
    }
}
