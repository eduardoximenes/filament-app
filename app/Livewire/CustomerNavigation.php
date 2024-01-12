<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use App\Services\CustomerForm;
use Filament\Actions\CreateAction;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

use Filament\Actions\Action;
use Filament\Actions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Form;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\View\View;
use Filament\Forms;

class CustomerNavigation extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    //receive the request from the api
    public $customers = null;
    // receive the data from the api
    public $customerData = [];
    //receive the meta data from the api
    public $metaData = [];

    public $page = 1;
    public $totalPages = null;
    public $fromCustomer = null;
    public $toCustomer = null;
    public $totalCustomers= null;

    public function mount()
    {
        $this->initalCustomers();
        $this->loadTable();
        $this->updateSpanContent();
        $this->totalCustomers = $this->metaData["total"];
        $this->totalPages = $this->metaData["last_page"];
    }

    public function initalCustomers()
    {
        $user = new User;
        $apiToken = $user->getToken();

        // Make a request to your second API and update the customers property
        $response = Http::withToken($apiToken, $type = 'Bearer')->get('http://localhost:8001/api/v1/customers?page=1');

        $data = $response->json();

        // Update customers property with new results
        $this->customers = $data;
    }

    public function loadTable()
    {
        //atualizo os customers
        $this->customerData = $this->customers["data"];
    }

    public function updateSpanContent()
    {
        //atualizo a navegação/paginação
        $this->metaData = $this->customers["meta"];
        $this->fromCustomer = $this->metaData["from"];
        $this->toCustomer = $this->metaData["to"];
    }

    public function nextAction(): Action
    {
        return Action::make('Next')
            ->outlined()
            ->disabled($this->totalPages == $this->page)
            ->after(function (){
                $this->page += 1;

                $user = new User;
                $apiToken = $user->getToken();

                // Make a request to your second API and update the customers property
                $response = Http::withToken($apiToken, $type = 'Bearer')->get('http://localhost:8001/api/v1/customers?page='.$this->page);

                $data = $response->json();

                // Update customers property with new results
                $this->customers = $data;
                $this->loadTable();
                $this->updateSpanContent();
            });
    }

    public function previousAction(): Action
    {
        return Action::make('Previous')
            ->disabled($this->page == 1)
            ->outlined()
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
                    $this->loadTable();
                    $this->updateSpanContent();
               }
            });
    }

    public function createAction(): Action
    {
        return Action::make('New Customer')
        ->url(route('filament.admin.resources.customers.create'))
        ->color("success");
    }

    public function render()
    {
        return view('livewire.customer-navigation');
    }

}
