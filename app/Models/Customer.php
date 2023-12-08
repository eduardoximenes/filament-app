<?php

namespace App\Models;

use Filament\Notifications\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;
use App\Models\User;

class Customer extends Model
{
    use Sushi;

    protected $fillable = [
        'id',
        'name',
        'type',
        'email',
        "address",
        "city",
        "state",
        'postalCode',

    ];

    public function getRows(): array
    {
        $user = new User;
        $apiToken = $user->getToken();

        //consulta a api
        $customers = Http::withToken($apiToken, $type = 'Bearer')->get('http://localhost:8001/api/v1/customers')->json();

        //filtrando atributos
        $customers = Arr::map($customers['data'], function ($item){
            return Arr::only($item,
                [
                    'id',
                    'name',
                    'type',
                    'email',
                    "address",
                    "city",
                    "state",
                    'postalCode',
                ]
            );
        });

        return $customers;
    }

}
