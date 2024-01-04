<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Http;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
           Actions\CreateAction::make()->color('success')->outlined(),
           Actions\Action::make('Previous')
                ->action(function (): void {
                    $paginate = new Customer;
                    $paginate->getRows(17);
                }),
           Actions\Action::make('Next')
           ->action(function (): void {
                 //
                }),
        ];
    }
}
