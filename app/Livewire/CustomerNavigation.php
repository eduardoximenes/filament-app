<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class CustomerNavigation extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public $page = 1;
    public $metaData;
    public $totalPages = 3;
    public $customers = null;

    protected function lastPage(): bool
    {
        if($this->customers != null){
            $this->metaData =  $this->customers["meta"];
            $this->totalPages = $this->metaData["last_page"];
        }

        return $this->totalPages == $this->page;
    }

    public function nextAction(): Action
    {
        return Action::make('Next')
            ->disabled($this->lastPage())
            ->after(function (){
                $this->page += 1;

                $user = new User;
                $apiToken = $user->getToken();

                // Make a request to your second API and update the customers property
                $response = Http::withToken($apiToken, $type = 'Bearer')->get('http://localhost:8001/api/v1/customers?page='.$this->page);

                $data = $response->json();

                // Update customers property with new results
                $this->customers = $data;
            });
    }


    public function previousAction(): Action
    {
        return Action::make('Previous')
            ->disabled($this->page == 1)
            ->after(function (): void {
                if($this->page > 1){
                    $this->page -= 1;

                    $user = new User;
                    $apiToken = $user->getToken();

                    // Make a request to your second API and update the customers property
                    $response = Http::withToken($apiToken, $type = 'Bearer')->get('http://localhost:8001/api/v1/customers?page='.$this->page);

                    $data = $response->json();

                    // Update customers property with new results
                    $this->customers = $data;
               }
            });
    }

    public function createAction(): Action
    {
        return Action::make('New Customer')
        ->action(function (): void {
            //
           });
    }


    public function render()
    {
        return view('livewire.customer-navigation');
    }

}
