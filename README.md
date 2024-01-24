<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre
    Ao integrar o Filament com uma API era necessário usufruir do pacote Sushi. No entanto, este possui algumas limitações, como não permitir que naveguemos entre as páginas de uma API. Posto isso, utilizei da opção de integrar componentes customizáveis (feitos com TailwindCSS & Livewire) ao Filament, para que fosse possível exibir meus resultados em uma tabela, navegar entre as páginas, realizar consultas (filtrar e ordenar), criar, deletar e editar registros. Em partes ainda se fez necessário o uso do pacote Sushi, uma vez que este facilita o trabalho e já estava pronto.
    Por exemplo, ao criar registros novos, a tela de criar (CreateCustomer) é fruto de um resource criado anteriormente, e esta utiliza do pacote para realizar a operação.

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
