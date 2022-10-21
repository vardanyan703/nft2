<?php

namespace App\Orchid\Resources;

use App\Models\WithdrawQuestion;
use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\TD;
use App\Jobs\CreateWithdraw;
use function Symfony\Component\Console\Helper\render;

class WithdrawQuestionResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = WithdrawQuestion::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        $withdraw = WithdrawQuestion::query()->where('id',request()->segment(6))->first();
        return [
          Select::make('status')
            ->options(WithdrawQuestion::WITHDRAW_QUESTION_STATUSES)
            ->title('Change withdrawal status')
            ->help('You change the withdrawal status by the amount ('.$withdraw->amount .' '. $withdraw->network .')')
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('network'),
            TD::make('amount'),
            TD::make('address'),
            TD::make('tag'),
            TD::make('status')->render($this->showStatus()),

            TD::make('created_at', 'Date of creation')
                ->defaultHidden()
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->defaultHidden()
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
          new DefaultSorted('id', 'desc')
        ];
    }

    public function rules(Model $model): array
    {
        return [
          'status' => ['required','in:0,1,2'],
        ];
    }

    public static function perPage(): int
    {
        return 10;
    }

    public function onSave(ResourceRequest $request, Model $model)
    {
        $status = $model->status;
        $model->update($request->validated()['model']);
        dispatch(new CreateWithdraw($model,$status != 3));
    }

    private function showStatus(): \Closure
    {
        return fn($record) => view('render.status', [
       'status' => WithdrawQuestion::WITHDRAW_QUESTION_STATUSES[$record->status]
    ]);
    }
}
