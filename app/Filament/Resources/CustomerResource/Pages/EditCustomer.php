<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Customer;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(function (Customer $customer){
                Http::delete("http://localhost:8001/api/v1/customers/{$customer->id}", []);
            })
        ];
    }
    protected function handleRecordUpdate(Model $record, array $data): Customer
    {
        $attempt = Http::patch("http://localhost:8001/api/v1/customers/{$record->id}", $data)->json();

        if($data['type'] != 'I' && $data['type'] != 'i' && $data['type'] != 'B' && $data['type'] != 'b'){
            Notification::make()
            ->title("Type not valid!")
            ->danger()
            ->send();

            $this->getSaveFormAction()->halt();

            return null;
        }

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.customers.index');
    }

}
