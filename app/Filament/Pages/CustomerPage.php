<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomerPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.customer-page';

    protected static ?string $title = 'Customers Navigation';

    protected static ?int $navigationSort = 3;
}
