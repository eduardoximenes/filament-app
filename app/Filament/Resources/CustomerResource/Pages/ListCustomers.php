<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Customer;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;

use Illuminate\Support\Facades\Http;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected static string $view = 'filament.pages.customer-page';

    protected function getHeaderActions(): array
    {
        return [
           Actions\CreateAction::make()->color('success')->outlined()
        ];
    }
}
