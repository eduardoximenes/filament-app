<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Http;
use Filament\Notifications\Notification;


class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('type')->required(),
                TextInput::make('email')->required()->email(),
                TextInput::make('address')->required(),
                TextInput::make('city')->required(),
                TextInput::make('state')->required(),
                TextInput::make('postalCode')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(15)
            ->columns([
                //
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
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
                }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
