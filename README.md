<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Componente 
    acesse: app/Filament/Pages/CustomerPage.php
    acesse: resources/views/filament/pages/customer-page.blade.php
    acesse: resources/views/livewire/customer-navigation.blade.php

## Sobre
    
    - O painel de administração Filament, acessa APIs externas por meio do pacote Sushi. 
        No entanto, este pacote não conta com a possibilidade de iterar entre páginas de uma API;

    - O projeto consistiu em criar um componente customizável que resolve este problema e disponibilizá-lo;
    
    - Desenvolvi uma aplicação full stack usando Laravel para servir uma API REST e da ”TALL” stack como frontend, 
        o que possibilitou a criação do componente;

## Possíveis melhorias
    - Testar mais a fundo a responsividade da aplicação;
    - Desacoplar os componentes pra facilitar a reutilização;
    - Modo noturno da tabela, até o momento ela só fica clara;

## Para testar localmente todo o projeto
    É necessário baixar o projeto filament-app e filament-api.
    Pra rodar a api, basta o comando:
        php artisan serve --port 8001
    E pra rodar a interface:
        php artisan serve
        npm run dev
 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
