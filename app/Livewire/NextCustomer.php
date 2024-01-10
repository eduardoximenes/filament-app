<?php

namespace App\Livewire;


use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;
use App\Models\Customer;
use Filament\Actions\Action;

class NextCustomer extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
    public Customer $customer;

    public function nextCustomer(): Action
    {
        return Action::make("Next")->query()
        ->action(function (): void {
            $arr = Customer::getRows(17);
            dd($arr);
        });
    }

    public function render()
    {
        return view('livewire.next-customer');
    }
}
