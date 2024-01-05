<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use App\Services\CustomerForm;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;
use App\Filament\Resources\CustomerResource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CustomerTable extends Component implements HasTable, HasForms
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->paginated(['all'])
            ->query(Customer::query())
            ->columns([
                TextColumn::make('name')
                ->weight('medium')
                ->alignLeft()
                ->searchable()
                ->sortable(),

                TextColumn::make('type')
                ->color('secondary')
                ->searchable()
                ->sortable(),

                TextColumn::make('email')
                ->searchable(),

                TextColumn::make('postalCode'),
            ])
            ->filters([
                //Name
                SelectFilter::make('Name')
                ->multiple()
                ->options(Customer::select('name')
                    ->distinct()
                    ->get()
                    ->pluck('name', 'name')
                ),
                 //Email
                 SelectFilter::make('Email')
                 ->multiple()
                 ->options(Customer::select('email')
                     ->distinct()
                     ->get()
                     ->pluck('email', 'email')
                 ),
                //Type
                SelectFilter::make('Type')
                ->multiple()
                ->options(Customer::select('type')
                    ->distinct()
                    ->get()
                    ->pluck('type', 'type')
                ),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make()
                    ->form(CustomerForm::schema())
                    ->using(function (Model $record, array $data): Customer {
                        $user = new User;
                        $apiToken = $user->getToken();

                        $attempt = Http::withToken($apiToken, $type = 'Bearer')->patch("http://localhost:8001/api/v1/customers/{$record->id}", $data)->json();

                        if($data['type'] != 'I' && $data['type'] != 'i' && $data['type'] != 'B' && $data['type'] != 'b'){
                            Notification::make()
                            ->title("Type not valid!")
                            ->danger()
                            ->send();

                            $this->getSaveFormAction()->halt();

                            return null;
                        }
                        else if( $attempt == null ){
                            Notification::make()
                            ->title("Credentials not valid!")
                            ->danger()
                            ->send();

                            $this->getSaveFormAction()->halt();

                            return null;
                        }

                        return $record;
                    }),
                    Tables\Actions\DeleteAction::make()->successNotification(null)->after(function (Customer $customer){
                        $user = new User;
                        $apiToken = $user->getToken();

                        $attempt = Http::withToken($apiToken, $type = 'Bearer')->delete("http://localhost:8001/api/v1/customers/{$customer->id}", [])->json();

                        if($attempt == null){
                            Notification::make()
                                    ->title("Unsuccessful deletion!")
                                    ->danger()
                                    ->send();
                            Notification::make()
                                    ->title("Invalid Token!")
                                    ->danger()
                                    ->send();

                            // $this->getSaveFormAction()->halt();

                            return null;
                        }

                        Notification::make()
                        ->title("Deleted!")
                        ->danger()
                        ->send();
                    })
                ]),

            ]);
    }

    public function render()
    {
        return view('livewire.customer-table');
    }
}
