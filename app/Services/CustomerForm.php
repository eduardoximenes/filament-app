<?php

namespace App\Services;

use Filament\Forms;

final class CustomerForm
{

    public static function schema(): array
    {
        return [
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('type')->required(),
            Forms\Components\TextInput::make('email')->required()->email(),
            Forms\Components\TextInput::make('address')->required(),
            Forms\Components\TextInput::make('city')->required(),
            Forms\Components\TextInput::make('state')->required(),
            Forms\Components\TextInput::make('postalCode')->required(),
        ];
    }
    

}

