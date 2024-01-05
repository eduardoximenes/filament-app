<x-filament-panels::page>
    <div class="button-container" style="display: flex; justify-content: space-between; align-items: center;">

        <x-filament::button href="https://filamentphp.com" tag="a">
            New Customer
        </x-filament::button>

        <div style="display: flex; justify-content: flex-end;">
            <x-filament::button wire:click="openNewUserModal">
                Previous
            </x-filament::button>

            <x-filament::button wire:click="openNewUserModal">
                Next
            </x-filament::button>
        </div>

    </div>


    <livewire:customer-table />

</x-filament-panels::page>
