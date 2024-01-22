<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use App\Services\CustomerForm;
use Filament\Actions\CreateAction;
use Filament\Notifications\Notification;
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
    public $sortDirection = null;
    public $sortDirection2 = null;
    public $searchQuery ='';


    public function mount()
    {
        $this->syncData();
    }

    public function syncData()
    {
        $user = new User;
        $apiToken = $user->getToken();

        // Make a request to your second API and update the customers property
        $response = Http::withToken($apiToken, 'Bearer')
        ->get('http://localhost:8001/api/v1/customers', [
            'page' => $this->page,
            'orderBy' => 'name',
            'sortOrder' => $this->sortDirection,
            'orderBy2' => 'type',
            'sortOrder2' => $this->sortDirection2,
            'name'=> $this->searchQuery,
        ]);

        $apiResponse = $response->json();

        // Update customers property with new results
        $this->customers = $apiResponse;
        $this->loadTable();
        $this->updateSpanContent();
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
        $this->totalCustomers = $this->metaData["total"];
        $this->totalPages = $this->metaData["last_page"];
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->syncData();
        }
    }

    public function nextPage()
    {
        if ($this->page < $this->totalPages) {
            $this->page++;
            $this->syncData();
        }
    }

    public function goToPage($page)
    {
        $this->page = $page;
        $this->syncData();
    }

    public function toggleSort()
    {
        if ($this->sortDirection === null) {
            $this->sortDirection = 'asc';
            $this->sortDirection2 = null;
        } elseif ($this->sortDirection === 'asc') {
            $this->sortDirection = 'desc';
            $this->sortDirection2 = null;
        } else {
            $this->sortDirection = null;
            $this->sortDirection2 = null;
        }

        $this->syncData();
    }
    public function toggleSort2()
    {
        if ($this->sortDirection2 === null) {
            $this->sortDirection2 = 'asc';
            $this->sortDirection = null;
        } elseif ($this->sortDirection2 === 'asc') {
            $this->sortDirection2 = 'desc';
            $this->sortDirection = null;
        } else {
            $this->sortDirection2 = null;
            $this->sortDirection = null;
        }

        $this->syncData();
    }


    public function updatedSearchQuery()
    {
        $this->page = 1;
        $this->syncData();

        if($this->searchQuery == '')
            $this->page = 1;

    }

    public function editAction(): Action
    {
        return Action::make('edit')
            ->link()
            ->icon('heroicon-m-pencil-square')
            ->modalSubmitAction(false)
            ->extraModalFooterActions(fn (Action $action): array => [
                $action->makeModalSubmitAction('ConfirmEdit', arguments: ['another' => true]),
            ])
            ->form(CustomerForm::schema())
            ->fillForm(fn (array $arguments): array => [
                'name' =>        $arguments['name'],
                'type' =>        $arguments['type'],
                'email' =>       $arguments['email'],
                'address' =>     $arguments['address'],
                'city' =>        $arguments['city'],
                'state' =>       $arguments['state'],
                'postalCode' =>  $arguments['postalCode'],
            ])
            ->action(function (array $data, array $arguments, Action $action){
                $user = new User;
                $apiToken = $user->getToken();

                $attempt = Http::withToken($apiToken, $type = 'Bearer')->patch("http://localhost:8001/api/v1/customers/{$arguments['id']}", $data)->json();

                if($data['type'] != 'I' && $data['type'] != 'i' && $data['type'] != 'B' && $data['type'] != 'b'){
                    Notification::make()
                        ->title("Type not valid!")
                        ->danger()
                        ->send();

                    $action->halt();
                    $action->cancel();
                }
                else if( $attempt == null ){
                    Notification::make()
                        ->title("Credentials not valid!")
                        ->danger()
                        ->send();

                    $action->halt();
                    $action->cancel();
                }

                $this->syncData();
            });
    }

    public function deleteAction(): Action
    {
        return Action::make('delete')
            ->color('danger')
            ->link()
            ->icon('heroicon-s-trash')
            ->requiresConfirmation()
            ->modalSubmitAction(false)
            ->extraModalFooterActions(fn (Action $action): array => [
                $action->makeModalSubmitAction('ConfirmDeletion', arguments: ['another' => true]),
            ])
            ->action(function (array $arguments) {
                $user = new User;
                $apiToken = $user->getToken();

                $attempt = Http::withToken($apiToken, $type = 'Bearer')->delete("http://localhost:8001/api/v1/customers/{$arguments['customer']}", [])->json();

                if($attempt == null){
                    Notification::make()
                            ->title("Unsuccessful deletion!")
                            ->danger()
                            ->send();
                }

                Notification::make()
                ->title("Deleted!")
                ->danger()
                ->send();

                $this->syncData();
            });
    }

    public function render()
    {
        return view('livewire.customer-navigation');
    }

}
