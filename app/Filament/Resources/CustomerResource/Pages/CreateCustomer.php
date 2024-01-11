<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use App\Models\Customer;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Http;
use App\Models\User;


class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    protected function handleRecordCreation(array $data): Customer
    {
        $user = new User;
        $apiToken = $user->getToken();

        $attempt =  Http::withToken($apiToken, $type = 'Bearer')->post('http://localhost:8001/api/v1/customers', $data)->json();

        if($attempt == null){
            Notification::make()
                    ->title("Unsuccessful attempt!")
                    ->danger()
                    ->send();

            $this->getCreateFormAction()->halt();

            return null;
        }

        $record = new ($this->getModel())($data);
        $record->save();

        return $record;
    }
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.customers.index');
    }
}

