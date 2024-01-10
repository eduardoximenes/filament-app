<div>
    <x-filament::button wire:click="fetchSecondApiResults">
        Next
    </x-filament::button>

    <section class="pt-4">
        {{$this->table}}
    </section>

</div>

