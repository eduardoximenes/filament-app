<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <button style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 dark:bg-custom-500 dark:hover:bg-custom-400 focus-visible:ring-custom-500/50 dark:focus-visible:ring-custom-400/50 fi-ac-btn-action" type="button" wire:loading.attr="disabled" wire:click="mountAction('Previous')">
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-btn-icon h-5 w-5" wire:loading.delay.default="" wire:target="mountAction('Previous')">
    <path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <span class="fi-btn-label">
            Previous
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>
    <button style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 dark:bg-custom-500 dark:hover:bg-custom-400 focus-visible:ring-custom-500/50 dark:focus-visible:ring-custom-400/50 fi-ac-btn-action" type="button" wire:loading.attr="disabled" wire:click="mountAction('Next')">
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-btn-icon h-5 w-5" wire:loading.delay.default="" wire:target="mountAction('Next')">
    <path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
    <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <span class="fi-btn-label">
            Next
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>



    <a href="http://127.0.0.1:8000/admin/customers/create" style="--c-400:var(--success-400);--c-500:var(--success-500);--c-600:var(--success-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-success fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid fi-btn-outlined ring-1 text-custom-600 ring-custom-600 hover:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-500 fi-ac-btn-action">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <span class="fi-btn-label">
            New customer
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </a>


    <div class="">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <div class="grid auto-cols-fr gap-y-8">


            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->



            <div class="flex flex-col gap-y-6">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->



    <div ax-load="" ax-load-src="http://127.0.0.1:8000/js/filament/tables/components/table.js?v=3.0.91.0" x-data="table" class="fi-ta" data-has-alpine-state="true" x-ignore="">
<div class="fi-ta-ctn divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
<div x-bind:hidden="! (true || (selectedRecords.length &amp;&amp; 0))" x-show="true || (selectedRecords.length &amp;&amp; 0)" class="fi-ta-header-ctn divide-y divide-gray-200 dark:divide-white/10">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <div x-show="true || (selectedRecords.length &amp;&amp; 0)" class="fi-ta-header-toolbar flex items-center justify-between gap-x-4 px-4 py-3 sm:px-6">


            <div class="flex shrink-0 items-center gap-x-4">


                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->



                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->



                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


            </div>

            <!--[if BLOCK]><![endif]-->                    <div class="ms-auto flex items-center gap-x-4">


                    <!--[if BLOCK]><![endif]-->                            <div x-id="['input']" class="fi-ta-search-field">
<label x-bind:for="$id('input')" class="sr-only" for="input-2">
    Search
</label>

<div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
<!--[if BLOCK]><![endif]-->        <div class="items-center gap-x-3 ps-3 flex pe-2">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg style=";" wire:loading.remove.delay.default="1" wire:target="tableSearch" class="fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500" wire:loading.delay.default="wire:loading.delay.default" wire:target="tableSearch">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>
 <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <input class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-0 pe-3" autocomplete="off" placeholder="Search" type="search" wire:model.live.debounce.500ms="tableSearch" x-bind:id="$id('input')" wire:key="jFHx6UOfw7juSnbiTlWQ.table.tableSearch.field.input" id="input-2">
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
                     <!--[if ENDBLOCK]><![endif]-->



                    <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]-->                                <!--[if BLOCK]><![endif]-->    <div x-data="{
    toggle: function (event) {
        $refs.panel.toggle(event)
    },

    open: function (event) {
        $refs.panel.open(event)
    },

    close: function (event) {
        $refs.panel.close(event)
    },
}" class="fi-dropdown fi-ta-filters-dropdown" wire:key="jFHx6UOfw7juSnbiTlWQ.table.filters" data-has-alpine-state="true">
<div x-on:click="toggle" class="fi-dropdown-trigger flex cursor-pointer">
    <button style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-ac-icon-btn-action" title="Filter" type="button">
                <span class="sr-only">
            Filter
        </span>

    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd"></path>
</svg>

                <div class="fi-icon-btn-badge-ctn absolute start-full top-0 z-[1] -ms-1 w-max -translate-x-1/2 rounded-md bg-white rtl:translate-x-1/2 dark:bg-gray-900">
            <div style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);" class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->

<span class="grid">
    <span class="truncate">
        0
    </span>
</span>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
        </div>
        </button>
</div>

<div x-float.placement.bottom-end.flip.shift.offset="{ offset: 8 }" x-ref="panel" x-transition:enter-start="opacity-0" x-transition:leave-end="opacity-0" wire:ignore.self="" wire:key="jFHx6UOfw7juSnbiTlWQ.table.filters.panel" class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-xs" style="display: none;">
    <div class="fi-ta-filters grid gap-y-4 p-6">
<div class="flex items-center justify-between">
    <h4 class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
        Filters
    </h4>

    <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-md fi-link-size-md gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400" type="button" wire:loading.attr="disabled" wire:target="tableFilters,resetTableFiltersForm" wire:click="resetTableFiltersForm" wire:loading.remove.delay.default="">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-5 w-5 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="resetTableFiltersForm">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Reset

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

    <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin h-5 w-5 text-gray-400 dark:text-gray-500" wire:loading.delay.default="" wire:target="tableFilters,resetTableFiltersForm">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
</div>

<div style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6">
<!--[if BLOCK]><![endif]-->
    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]">
<!--[if BLOCK]><![endif]-->                <div>
<div style="--cols-default: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] fi-fo-component-ctn gap-6">
<!--[if BLOCK]><![endif]-->
    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="jFHx6UOfw7juSnbiTlWQ.tableFilters.Name.values.Filament\Forms\Components\Select">
<!--[if BLOCK]><![endif]-->                <div class="fi-fo-field-wrp">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="grid gap-y-2">
    <!--[if BLOCK]><![endif]-->            <div class="flex items-center justify-between gap-x-3">
            <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="tableFilters.Name.values">


<span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">

    Name<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</span>


</label>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->            <div class="grid gap-y-2">
            <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500 fi-fo-select">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <!--[if BLOCK]><![endif]-->            <div ax-load="" ax-load-src="http://127.0.0.1:8000/js/filament/forms/components/select.js?v=3.0.91.0" x-data="selectFormComponent({
                        canSelectPlaceholder: true,
                        isHtmlAllowed: false,
                        getOptionLabelUsing: async () => {
                            return await $wire.getFormSelectOptionLabel('tableFilters.Name.values')
                        },
                        getOptionLabelsUsing: async () => {
                            return await $wire.getFormSelectOptionLabels('tableFilters.Name.values')
                        },
                        getOptionsUsing: async () => {
                            return await $wire.getFormSelectOptions('tableFilters.Name.values')
                        },
                        getSearchResultsUsing: async (search) => {
                            return await $wire.getFormSelectSearchResults('tableFilters.Name.values', search)
                        },
                        isAutofocused: false,
                        isMultiple: true,
                        isSearchable: true,
                        livewireId: 'jFHx6UOfw7juSnbiTlWQ',
                        hasDynamicOptions: false,
                        hasDynamicSearchResults: false,
                        loadingMessage: 'Loading...',
                        maxItems: null,
                        maxItemsMessage: 'Only  can be selected.',
                        noSearchResultsMessage: 'No options match your search.',
                        options: JSON.parse('[{\u0022label\u0022:\u0022Nader Group\u0022,\u0022value\u0022:\u0022Nader Group\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Dedrick Farrell\u0022,\u0022value\u0022:\u0022Dedrick Farrell\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022ximas studio\u0022,\u0022value\u0022:\u0022ximas studio\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Rempel Inc\u0022,\u0022value\u0022:\u0022Rempel Inc\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Alexander Denesik\u0022,\u0022value\u0022:\u0022Alexander Denesik\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Thompson PLC\u0022,\u0022value\u0022:\u0022Thompson PLC\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Heidenreich, Crooks and Feest\u0022,\u0022value\u0022:\u0022Heidenreich, Crooks and Feest\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Gislason-Barrows\u0022,\u0022value\u0022:\u0022Gislason-Barrows\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Heathcote, Kemmer and Deckow\u0022,\u0022value\u0022:\u0022Heathcote, Kemmer and Deckow\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Natasha Hyatt\u0022,\u0022value\u0022:\u0022Natasha Hyatt\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Milan Stamm\u0022,\u0022value\u0022:\u0022Milan Stamm\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Brown-Windler\u0022,\u0022value\u0022:\u0022Brown-Windler\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Schaden Group\u0022,\u0022value\u0022:\u0022Schaden Group\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Dr. Amari Hamill V\u0022,\u0022value\u0022:\u0022Dr. Amari Hamill V\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022Tia Dooley I\u0022,\u0022value\u0022:\u0022Tia Dooley I\u0022,\u0022disabled\u0022:false}]'),
                        optionsLimit: 50,
                        placeholder: 'All',
                        position: null,
                        searchDebounce: 1000,
                        searchingMessage: 'Searching...',
                        searchPrompt: 'Start typing to search...',
                        searchableOptionFields: JSON.parse('[\u0022label\u0022]'),
                        state: $wire.$entangle('tableFilters.Name.values', true),
                        statePath: 'tableFilters.Name.values',
                    })" wire:ignore="" x-on:keydown.esc="select.dropdown.isActive &amp;&amp; $event.stopPropagation()" class="">
            <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select x-ref="input" id="tableFilters.Name.values" multiple="multiple" class="choices__input" hidden="" tabindex="-1" data-choice="active"></select><div class="choices__list choices__list--multiple"></div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="All" placeholder="All" style="min-width: 4ch; width: 1ch;"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--tableFiltersNamevalues-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="Nader Group" data-select-text="" data-choice-selectable="" aria-selected="true">Nader Group</div><div id="choices--tableFiltersNamevalues-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Dedrick Farrell" data-select-text="" data-choice-selectable="">Dedrick Farrell</div><div id="choices--tableFiltersNamevalues-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="ximas studio" data-select-text="" data-choice-selectable="">ximas studio</div><div id="choices--tableFiltersNamevalues-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="Rempel Inc" data-select-text="" data-choice-selectable="">Rempel Inc</div><div id="choices--tableFiltersNamevalues-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="Alexander Denesik" data-select-text="" data-choice-selectable="">Alexander Denesik</div><div id="choices--tableFiltersNamevalues-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="Thompson PLC" data-select-text="" data-choice-selectable="">Thompson PLC</div><div id="choices--tableFiltersNamevalues-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="Heidenreich, Crooks and Feest" data-select-text="" data-choice-selectable="">Heidenreich, Crooks and Feest</div><div id="choices--tableFiltersNamevalues-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="Gislason-Barrows" data-select-text="" data-choice-selectable="">Gislason-Barrows</div><div id="choices--tableFiltersNamevalues-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="Heathcote, Kemmer and Deckow" data-select-text="" data-choice-selectable="">Heathcote, Kemmer and Deckow</div><div id="choices--tableFiltersNamevalues-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="Natasha Hyatt" data-select-text="" data-choice-selectable="">Natasha Hyatt</div><div id="choices--tableFiltersNamevalues-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="Milan Stamm" data-select-text="" data-choice-selectable="">Milan Stamm</div><div id="choices--tableFiltersNamevalues-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="Brown-Windler" data-select-text="" data-choice-selectable="">Brown-Windler</div><div id="choices--tableFiltersNamevalues-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="Schaden Group" data-select-text="" data-choice-selectable="">Schaden Group</div><div id="choices--tableFiltersNamevalues-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="Dr. Amari Hamill V" data-select-text="" data-choice-selectable="">Dr. Amari Hamill V</div><div id="choices--tableFiltersNamevalues-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="Tia Dooley I" data-select-text="" data-choice-selectable="">Tia Dooley I</div></div></div></div>
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>
</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>
 <!--[if ENDBLOCK]><![endif]-->
</div>

</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>

    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]">
<!--[if BLOCK]><![endif]-->                <div>
<div style="--cols-default: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] fi-fo-component-ctn gap-6">
<!--[if BLOCK]><![endif]-->
    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="jFHx6UOfw7juSnbiTlWQ.tableFilters.Email.values.Filament\Forms\Components\Select">
<!--[if BLOCK]><![endif]-->                <div class="fi-fo-field-wrp">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="grid gap-y-2">
    <!--[if BLOCK]><![endif]-->            <div class="flex items-center justify-between gap-x-3">
            <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="tableFilters.Email.values">


<span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">

    Email<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</span>


</label>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->            <div class="grid gap-y-2">
            <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500 fi-fo-select">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <!--[if BLOCK]><![endif]-->            <div ax-load="" ax-load-src="http://127.0.0.1:8000/js/filament/forms/components/select.js?v=3.0.91.0" x-data="selectFormComponent({
                        canSelectPlaceholder: true,
                        isHtmlAllowed: false,
                        getOptionLabelUsing: async () => {
                            return await $wire.getFormSelectOptionLabel('tableFilters.Email.values')
                        },
                        getOptionLabelsUsing: async () => {
                            return await $wire.getFormSelectOptionLabels('tableFilters.Email.values')
                        },
                        getOptionsUsing: async () => {
                            return await $wire.getFormSelectOptions('tableFilters.Email.values')
                        },
                        getSearchResultsUsing: async (search) => {
                            return await $wire.getFormSelectSearchResults('tableFilters.Email.values', search)
                        },
                        isAutofocused: false,
                        isMultiple: true,
                        isSearchable: true,
                        livewireId: 'jFHx6UOfw7juSnbiTlWQ',
                        hasDynamicOptions: false,
                        hasDynamicSearchResults: false,
                        loadingMessage: 'Loading...',
                        maxItems: null,
                        maxItemsMessage: 'Only  can be selected.',
                        noSearchResultsMessage: 'No options match your search.',
                        options: JSON.parse('[{\u0022label\u0022:\u0022dream@dream.com\u0022,\u0022value\u0022:\u0022dream@dream.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022bosco.delia@gmail.com\u0022,\u0022value\u0022:\u0022bosco.delia@gmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022brekke.annamarie@hotmail.com\u0022,\u0022value\u0022:\u0022brekke.annamarie@hotmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022alysa.wehner@hotmail.com\u0022,\u0022value\u0022:\u0022alysa.wehner@hotmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022rkilback@haley.info\u0022,\u0022value\u0022:\u0022rkilback@haley.info\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022growe@hotmail.com\u0022,\u0022value\u0022:\u0022growe@hotmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022kiehn.winona@gmail.com\u0022,\u0022value\u0022:\u0022kiehn.winona@gmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022zieme.cleveland@hotmail.com\u0022,\u0022value\u0022:\u0022zieme.cleveland@hotmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022othompson@hotmail.com\u0022,\u0022value\u0022:\u0022othompson@hotmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022ullrich.wilfredo@yahoo.com\u0022,\u0022value\u0022:\u0022ullrich.wilfredo@yahoo.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022arvid25@wintheiser.com\u0022,\u0022value\u0022:\u0022arvid25@wintheiser.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022awalsh@gmail.com\u0022,\u0022value\u0022:\u0022awalsh@gmail.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022feest.laverna@bernhard.com\u0022,\u0022value\u0022:\u0022feest.laverna@bernhard.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022manuel.johnson@yahoo.com\u0022,\u0022value\u0022:\u0022manuel.johnson@yahoo.com\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022lois10@fisher.com\u0022,\u0022value\u0022:\u0022lois10@fisher.com\u0022,\u0022disabled\u0022:false}]'),
                        optionsLimit: 50,
                        placeholder: 'All',
                        position: null,
                        searchDebounce: 1000,
                        searchingMessage: 'Searching...',
                        searchPrompt: 'Start typing to search...',
                        searchableOptionFields: JSON.parse('[\u0022label\u0022]'),
                        state: $wire.$entangle('tableFilters.Email.values', true),
                        statePath: 'tableFilters.Email.values',
                    })" wire:ignore="" x-on:keydown.esc="select.dropdown.isActive &amp;&amp; $event.stopPropagation()" class="">
            <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select x-ref="input" id="tableFilters.Email.values" multiple="multiple" class="choices__input" hidden="" tabindex="-1" data-choice="active"></select><div class="choices__list choices__list--multiple"></div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="All" placeholder="All" style="min-width: 4ch; width: 1ch;"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--tableFiltersEmailvalues-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="dream@dream.com" data-select-text="" data-choice-selectable="" aria-selected="true">dream@dream.com</div><div id="choices--tableFiltersEmailvalues-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="bosco.delia@gmail.com" data-select-text="" data-choice-selectable="">bosco.delia@gmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="brekke.annamarie@hotmail.com" data-select-text="" data-choice-selectable="">brekke.annamarie@hotmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="alysa.wehner@hotmail.com" data-select-text="" data-choice-selectable="">alysa.wehner@hotmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="rkilback@haley.info" data-select-text="" data-choice-selectable="">rkilback@haley.info</div><div id="choices--tableFiltersEmailvalues-item-choice-6" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="6" data-value="growe@hotmail.com" data-select-text="" data-choice-selectable="">growe@hotmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-7" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="7" data-value="kiehn.winona@gmail.com" data-select-text="" data-choice-selectable="">kiehn.winona@gmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-8" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="8" data-value="zieme.cleveland@hotmail.com" data-select-text="" data-choice-selectable="">zieme.cleveland@hotmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-9" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="9" data-value="othompson@hotmail.com" data-select-text="" data-choice-selectable="">othompson@hotmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-10" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="10" data-value="ullrich.wilfredo@yahoo.com" data-select-text="" data-choice-selectable="">ullrich.wilfredo@yahoo.com</div><div id="choices--tableFiltersEmailvalues-item-choice-11" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="11" data-value="arvid25@wintheiser.com" data-select-text="" data-choice-selectable="">arvid25@wintheiser.com</div><div id="choices--tableFiltersEmailvalues-item-choice-12" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="12" data-value="awalsh@gmail.com" data-select-text="" data-choice-selectable="">awalsh@gmail.com</div><div id="choices--tableFiltersEmailvalues-item-choice-13" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="13" data-value="feest.laverna@bernhard.com" data-select-text="" data-choice-selectable="">feest.laverna@bernhard.com</div><div id="choices--tableFiltersEmailvalues-item-choice-14" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="14" data-value="manuel.johnson@yahoo.com" data-select-text="" data-choice-selectable="">manuel.johnson@yahoo.com</div><div id="choices--tableFiltersEmailvalues-item-choice-15" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="15" data-value="lois10@fisher.com" data-select-text="" data-choice-selectable="">lois10@fisher.com</div></div></div></div>
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>
</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>
 <!--[if ENDBLOCK]><![endif]-->
</div>

</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>

    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]">
<!--[if BLOCK]><![endif]-->                <div>
<div style="--cols-default: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] fi-fo-component-ctn gap-6">
<!--[if BLOCK]><![endif]-->
    <div style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="jFHx6UOfw7juSnbiTlWQ.tableFilters.Type.values.Filament\Forms\Components\Select">
<!--[if BLOCK]><![endif]-->                <div class="fi-fo-field-wrp">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="grid gap-y-2">
    <!--[if BLOCK]><![endif]-->            <div class="flex items-center justify-between gap-x-3">
            <!--[if BLOCK]><![endif]-->                    <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="tableFilters.Type.values">


<span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">

    Type<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</span>


</label>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->            <div class="grid gap-y-2">
            <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500 fi-fo-select">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <!--[if BLOCK]><![endif]-->            <div ax-load="" ax-load-src="http://127.0.0.1:8000/js/filament/forms/components/select.js?v=3.0.91.0" x-data="selectFormComponent({
                        canSelectPlaceholder: true,
                        isHtmlAllowed: false,
                        getOptionLabelUsing: async () => {
                            return await $wire.getFormSelectOptionLabel('tableFilters.Type.values')
                        },
                        getOptionLabelsUsing: async () => {
                            return await $wire.getFormSelectOptionLabels('tableFilters.Type.values')
                        },
                        getOptionsUsing: async () => {
                            return await $wire.getFormSelectOptions('tableFilters.Type.values')
                        },
                        getSearchResultsUsing: async (search) => {
                            return await $wire.getFormSelectSearchResults('tableFilters.Type.values', search)
                        },
                        isAutofocused: false,
                        isMultiple: true,
                        isSearchable: true,
                        livewireId: 'jFHx6UOfw7juSnbiTlWQ',
                        hasDynamicOptions: false,
                        hasDynamicSearchResults: false,
                        loadingMessage: 'Loading...',
                        maxItems: null,
                        maxItemsMessage: 'Only  can be selected.',
                        noSearchResultsMessage: 'No options match your search.',
                        options: JSON.parse('[{\u0022label\u0022:\u0022B\u0022,\u0022value\u0022:\u0022B\u0022,\u0022disabled\u0022:false},{\u0022label\u0022:\u0022I\u0022,\u0022value\u0022:\u0022I\u0022,\u0022disabled\u0022:false}]'),
                        optionsLimit: 50,
                        placeholder: 'All',
                        position: null,
                        searchDebounce: 1000,
                        searchingMessage: 'Searching...',
                        searchPrompt: 'Start typing to search...',
                        searchableOptionFields: JSON.parse('[\u0022label\u0022]'),
                        state: $wire.$entangle('tableFilters.Type.values', true),
                        statePath: 'tableFilters.Type.values',
                    })" wire:ignore="" x-on:keydown.esc="select.dropdown.isActive &amp;&amp; $event.stopPropagation()" class="">
            <div class="choices" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select x-ref="input" id="tableFilters.Type.values" multiple="multiple" class="choices__input" hidden="" tabindex="-1" data-choice="active"></select><div class="choices__list choices__list--multiple"></div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="All" placeholder="All" style="min-width: 4ch; width: 1ch;"></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" aria-multiselectable="true" role="listbox"><div id="choices--tableFiltersTypevalues-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="B" data-select-text="" data-choice-selectable="" aria-selected="true">B</div><div id="choices--tableFiltersTypevalues-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="I" data-select-text="" data-choice-selectable="">I</div></div></div></div>
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->
</div>
</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>
 <!--[if ENDBLOCK]><![endif]-->
</div>

</div>

         <!--[if ENDBLOCK]><![endif]-->
</div>
 <!--[if ENDBLOCK]><![endif]-->
</div>

</div>
</div>
</div>
<!--[if ENDBLOCK]><![endif]-->
                         <!--[if ENDBLOCK]><![endif]-->



                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->


        </div>
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="fi-ta-content relative divide-y divide-gray-200 overflow-x-auto dark:divide-white/10 dark:border-t-white/10">
        <!--[if BLOCK]><![endif]-->                <table class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5">
<!--[if BLOCK]><![endif]-->        <thead class="bg-gray-50 dark:bg-white/5">
        <tr>
            <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                     <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]-->                            <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-name">
<button type="button" wire:click="sortTable('name')" class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start rtl:flex-row-reverse">
    <!--[if BLOCK]><![endif]-->            <span class="sr-only">
            Sort by
        </span>
     <!--[if ENDBLOCK]><![endif]-->

    <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
        Name
    </span>

    <!--[if BLOCK]><![endif]-->            <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus-visible:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus-visible:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
        <span class="sr-only">
            Ascending
        </span>
     <!--[if ENDBLOCK]><![endif]-->
</button>
</th>
                                                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-type">
<button type="button" wire:click="sortTable('type')" class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
    <!--[if BLOCK]><![endif]-->            <span class="sr-only">
            Sort by
        </span>
     <!--[if ENDBLOCK]><![endif]-->

    <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
        Type
    </span>

    <!--[if BLOCK]><![endif]-->            <svg class="fi-ta-header-cell-sort-icon h-5 w-5 transition duration-75 text-gray-400 dark:text-gray-500 group-hover:text-gray-500 group-focus-visible:text-gray-500 dark:group-hover:text-gray-400 dark:group-focus-visible:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
</svg>
        <span class="sr-only">
            Ascending
        </span>
     <!--[if ENDBLOCK]><![endif]-->
</button>
</th>
                                                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-email">
<span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
        Email
    </span>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</span>
</th>
                                                <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-postal-code">
<span class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <span class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white">
        Postal code
    </span>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</span>
</th>
                     <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]-->                                <!--[if BLOCK]><![endif]-->                                    <th class="w-1"></th>
                             <!--[if ENDBLOCK]><![endif]-->
                         <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                     <!--[if ENDBLOCK]><![endif]-->
        </tr>
    </thead>
 <!--[if ENDBLOCK]><![endif]-->

<tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]-->
                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('11'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('11'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.11">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.11.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/11/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Nader Group
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.11.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/11/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.11.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/11/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                dream@dream.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.11.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/11/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                80250-003
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/11/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '11')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '11')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '11')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('12'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('12'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.12">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.12.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/12/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Dedrick Farrell
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.12.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/12/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.12.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/12/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                bosco.delia@gmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.12.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/12/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                80250-004
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/12/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '12')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '12')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '12')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('13'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('13'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.13">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.13.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/13/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                ximas studio
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.13.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/13/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.13.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/13/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                brekke.annamarie@hotmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.13.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/13/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                38718-999
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/13/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '13')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '13')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '13')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('14'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('14'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.14">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.14.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/14/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Rempel Inc
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.14.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/14/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.14.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/14/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                alysa.wehner@hotmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.14.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/14/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                52955
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/14/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '14')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '14')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '14')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('15'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('15'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.15">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.15.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/15/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Alexander Denesik
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.15.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/15/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.15.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/15/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                rkilback@haley.info
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.15.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/15/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                69296-8545
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/15/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '15')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '15')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '15')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('16'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('16'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.16">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.16.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/16/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Thompson PLC
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.16.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/16/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.16.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/16/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                growe@hotmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.16.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/16/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                06764-8222
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/16/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '16')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '16')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '16')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('17'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('17'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.17">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.17.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/17/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Heidenreich, Crooks and Feest
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.17.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/17/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.17.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/17/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                kiehn.winona@gmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.17.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/17/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                10208-7463
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/17/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '17')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '17')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '17')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('18'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('18'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.18">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.18.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/18/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Gislason-Barrows
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.18.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/18/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.18.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/18/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                zieme.cleveland@hotmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.18.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/18/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                18043
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/18/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '18')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '18')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '18')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('19'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('19'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.19">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.19.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/19/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Heathcote, Kemmer and Deckow
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.19.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/19/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.19.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/19/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                othompson@hotmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.19.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/19/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                43965-7294
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/19/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '19')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '19')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '19')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('20'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('20'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.20">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.20.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/20/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Natasha Hyatt
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.20.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/20/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.20.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/20/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                ullrich.wilfredo@yahoo.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.20.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/20/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                12345-789
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/20/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '20')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '20')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '20')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('21'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('21'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.21">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.21.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/21/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Milan Stamm
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.21.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/21/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.21.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/21/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                arvid25@wintheiser.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.21.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/21/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                92218-0884
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/21/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '21')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '21')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '21')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('22'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('22'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.22">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.22.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/22/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Brown-Windler
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.22.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/22/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.22.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/22/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                awalsh@gmail.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.22.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/22/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                22419
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/22/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '22')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '22')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '22')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('23'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('23'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.23">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.23.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/23/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Schaden Group
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.23.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/23/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                B
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.23.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/23/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                feest.laverna@bernhard.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.23.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/23/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                42418
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/23/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '23')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '23')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '23')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('25'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('25'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.25">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.25.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/25/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Dr. Amari Hamill V
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.25.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/25/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.25.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/25/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                manuel.johnson@yahoo.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.25.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/25/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                76254
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/25/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '25')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '25')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '25')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->


                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                                <tr x-bind:class="{
        'hidden': false &amp;&amp; isGroupCollapsed(''),
        'bg-gray-50 dark:bg-white/5': isRecordSelected('27'),
        '[&amp;>*:first-child]:relative [&amp;>*:first-child]:before:absolute [&amp;>*:first-child]:before:start-0 [&amp;>*:first-child]:before:inset-y-0 [&amp;>*:first-child]:before:w-0.5 [&amp;>*:first-child]:before:bg-primary-600 [&amp;>*:first-child]:dark:before:bg-primary-500': isRecordSelected('27'),
    }" class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="jFHx6UOfw7juSnbiTlWQ.table.records.27">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->
                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.27.column.name">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/27/edit" class="flex w-full disabled:pointer-events-none justify-start text-left">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white font-medium " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                Tia Dooley I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-type" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.27.column.type">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/27/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm fi-color-custom text-custom-600 dark:text-custom-400  " style="--c-400:var(--secondary-400);--c-600:var(--secondary-600);">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                I
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-email" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.27.column.email">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/27/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                lois10@fisher.com
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>

                                    <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-postal-code" wire:key="jFHx6UOfw7juSnbiTlWQ.table.record.27.column.postalCode">
<div class="fi-ta-col-wrp">
<!--[if BLOCK]><![endif]-->        <a href="http://127.0.0.1:8000/admin/customers/27/edit" class="flex w-full disabled:pointer-events-none justify-start text-start">
        <div class="fi-ta-text grid gap-y-1 px-3 py-4">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div class="">
        <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->
                <div class="flex max-w-max">
                    <!--[if BLOCK]><![endif]-->                            <div class="fi-ta-text-item inline-flex items-center gap-1.5 text-sm text-gray-950 dark:text-white  " style="">
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <div>
                                76419-0214
                            </div>

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                        </div>
                     <!--[if ENDBLOCK]><![endif]-->
                </div>
             <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
</div>

    </a>
 <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]-->                                        <td class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3">
<div class="whitespace-nowrap px-3 py-4">
    <div class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end">
<!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a href="http://127.0.0.1:8000/admin/customers/27/edit" style="--c-300:var(--primary-300);--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action">
    <!--[if BLOCK]><![endif]-->            <svg style="--c-500:var(--primary-500);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"></path>
<path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"></path>
</svg>         <!--[if ENDBLOCK]><![endif]-->

    Edit

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button style="--c-300:var(--danger-300);--c-400:var(--danger-400);--c-500:var(--danger-500);--c-600:var(--danger-600);" class="fi-link relative inline-flex items-center justify-center font-semibold outline-none transition duration-75 hover:underline focus-visible:underline fi-size-sm fi-link-size-sm gap-1 text-sm fi-color-custom text-custom-600 dark:text-custom-400 fi-ac-link-action" type="button" wire:loading.attr="disabled" wire:click="mountTableAction('delete', '27')">
    <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->                <svg wire:loading.remove.delay.default="1" wire:target="mountTableAction('delete', '27')" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
<path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd"></path>
</svg>             <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="animate-spin fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" wire:loading.delay.default="" wire:target="mountTableAction('delete', '27')">
<path clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill-rule="evenodd" fill="currentColor" opacity="0.2"></path>
<path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
</svg>
         <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    Delete

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button> <!--[if ENDBLOCK]><![endif]-->

 <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
</td>
                                 <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                         <!--[if ENDBLOCK]><![endif]-->

                                                 <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                 <!--[if ENDBLOCK]><![endif]-->
</tbody>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</table>
         <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]-->            <nav aria-label="Pagination navigation" role="navigation" class="fi-pagination grid grid-cols-[1fr_auto_1fr] items-center gap-x-3 px-3 py-3 sm:px-6">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->        <span class="fi-pagination-overview text-sm font-medium text-gray-700 dark:text-gray-200">
        Showing 1 to 15 of 15 results
    </span>

        <div class="col-start-2 justify-self-center">
        <label class="fi-pagination-records-per-page-select fi-compact">
            <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <select class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3" wire:model.live="tableRecordsPerPage">
<!--[if BLOCK]><![endif]-->                            <option value="5">
                            5
                        </option>
                                                <option value="10">
                            10
                        </option>
                                                <option value="25">
                            25
                        </option>
                                                <option value="50">
                            50
                        </option>
                                                <option value="all">
                            All
                        </option>
                     <!--[if ENDBLOCK]><![endif]-->
</select>
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

            <span class="sr-only">
                Per page
            </span>
        </label>

        <label class="fi-pagination-records-per-page-select">
            <div class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 focus-within:ring-primary-600 dark:ring-white/20 dark:focus-within:ring-primary-500">
<!--[if BLOCK]><![endif]-->        <div class="items-center gap-x-3 ps-3 flex border-e border-gray-200 pe-3 ps-3 dark:border-white/10">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->                <span class="fi-input-wrp-label whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                Per page
            </span>
         <!--[if ENDBLOCK]><![endif]-->
    </div>
 <!--[if ENDBLOCK]><![endif]-->

<div class="min-w-0 flex-1">
    <select class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3" wire:model.live="tableRecordsPerPage">
<!--[if BLOCK]><![endif]-->                            <option value="5">
                            5
                        </option>
                                                <option value="10">
                            10
                        </option>
                                                <option value="25">
                            25
                        </option>
                                                <option value="50">
                            50
                        </option>
                                                <option value="all">
                            All
                        </option>
                     <!--[if ENDBLOCK]><![endif]-->
</select>
</div>

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
        </label>
    </div>
 <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</nav>
     <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedAction">

    <div aria-modal="true" role="dialog" x-data="{
    isOpen: false,

    livewire: null,

    close: function () {
        this.isOpen = false

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-closed', { id: 'jFHx6UOfw7juSnbiTlWQ-action' }),
        )
    },

    open: function () {
        this.isOpen = true

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-opened', { id: 'jFHx6UOfw7juSnbiTlWQ-action' }),
        )
    },
}" x-on:close-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-action') close()" x-on:open-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-action') open()" x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div x-show="isOpen" x-transition.duration.300ms.opacity="" class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center" style="display: none;">
    <div aria-hidden="true" x-on:click="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-action' })" class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer" style="will-change: transform"></div>

    <div x-ref="modalContainer" class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') &amp;&amp; $wire.mountedActions.length) open()" x-on:modal-closed.stop="const mountedActionShouldOpenModal = false


            if (! mountedActionShouldOpenModal) {
                return
            }

            if ($wire.mountedFormComponentActions.length) {
                return
            }

            $wire.unmountAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') close()">
        <div x-data="{ isShown: false }" x-init="
                $nextTick(() => {
                    isShown = isOpen
                    $watch('isOpen', () => (isShown = isOpen))
                })
            " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100" x-transition:leave-start="scale-95" x-transition:leave-end="scale-100" class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;" data-has-alpine-state="true">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
</div>
</form>

 <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedTableAction">

    <div aria-modal="true" role="dialog" x-data="{
    isOpen: false,

    livewire: null,

    close: function () {
        this.isOpen = false

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-closed', { id: 'jFHx6UOfw7juSnbiTlWQ-table-action' }),
        )
    },

    open: function () {
        this.isOpen = true

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-opened', { id: 'jFHx6UOfw7juSnbiTlWQ-table-action' }),
        )
    },
}" x-on:close-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-table-action') close()" x-on:open-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-table-action') open()" x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div x-show="isOpen" x-transition.duration.300ms.opacity="" class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center" style="display: none;">
    <div aria-hidden="true" x-on:click="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-table-action' })" class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer" style="will-change: transform"></div>

    <div x-ref="modalContainer" class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') &amp;&amp; $wire.mountedTableActions.length) open()" x-on:modal-closed.stop="const mountedTableActionShouldOpenModal = false


            if (! mountedTableActionShouldOpenModal) {
                return
            }

            if ($wire.mountedFormComponentActions.length) {
                return
            }

            $wire.unmountTableAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') close()">
        <div x-data="{ isShown: false }" x-init="
                $nextTick(() => {
                    isShown = isOpen
                    $watch('isOpen', () => (isShown = isOpen))
                })
            " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-table-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100" x-transition:leave-start="scale-95" x-transition:leave-end="scale-100" class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;" data-has-alpine-state="true">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
</div>
</form>

<form wire:submit.prevent="callMountedTableBulkAction">

    <div aria-modal="true" role="dialog" x-data="{
    isOpen: false,

    livewire: null,

    close: function () {
        this.isOpen = false

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-closed', { id: 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action' }),
        )
    },

    open: function () {
        this.isOpen = true

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-opened', { id: 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action' }),
        )
    },
}" x-on:close-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action') close()" x-on:open-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action') open()" x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div x-show="isOpen" x-transition.duration.300ms.opacity="" class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center" style="display: none;">
    <div aria-hidden="true" x-on:click="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action' })" class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer" style="will-change: transform"></div>

    <div x-ref="modalContainer" class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') &amp;&amp; $wire.mountedTableBulkAction) open()" x-on:modal-closed.stop="const mountedTableBulkActionShouldOpenModal = false


            if (! mountedTableBulkActionShouldOpenModal) {
                return
            }

            if ($wire.mountedFormComponentActions.length) {
                return
            }

            $wire.mountedTableBulkAction = null" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') close()">
        <div x-data="{ isShown: false }" x-init="
                $nextTick(() => {
                    isShown = isOpen
                    $watch('isOpen', () => (isShown = isOpen))
                })
            " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-table-bulk-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100" x-transition:leave-start="scale-95" x-transition:leave-end="scale-100" class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;" data-has-alpine-state="true">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
</div>
</form>

 <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedInfolistAction">

    <div aria-modal="true" role="dialog" x-data="{
    isOpen: false,

    livewire: null,

    close: function () {
        this.isOpen = false

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-closed', { id: 'jFHx6UOfw7juSnbiTlWQ-infolist-action' }),
        )
    },

    open: function () {
        this.isOpen = true

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-opened', { id: 'jFHx6UOfw7juSnbiTlWQ-infolist-action' }),
        )
    },
}" x-on:close-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-infolist-action') close()" x-on:open-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-infolist-action') open()" x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div x-show="isOpen" x-transition.duration.300ms.opacity="" class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center" style="display: none;">
    <div aria-hidden="true" x-on:click="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-infolist-action' })" class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer" style="will-change: transform"></div>

    <div x-ref="modalContainer" class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') &amp;&amp; $wire.mountedInfolistActions.length) open()" x-on:modal-closed.stop="const mountedInfolistActionShouldOpenModal = false


            if (! mountedInfolistActionShouldOpenModal) {
                return
            }

            if ($wire.mountedFormComponentActions.length) {
                return
            }

            $wire.unmountInfolistAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ') close()">
        <div x-data="{ isShown: false }" x-init="
                $nextTick(() => {
                    isShown = isOpen
                    $watch('isOpen', () => (isShown = isOpen))
                })
            " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-infolist-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100" x-transition:leave-start="scale-95" x-transition:leave-end="scale-100" class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;" data-has-alpine-state="true">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
</div>
</form>

 <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->
<form wire:submit.prevent="callMountedFormComponentAction">
    <div aria-modal="true" role="dialog" x-data="{
    isOpen: false,

    livewire: null,

    close: function () {
        this.isOpen = false

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-closed', { id: 'jFHx6UOfw7juSnbiTlWQ-form-component-action' }),
        )
    },

    open: function () {
        this.isOpen = true

        this.$refs.modalContainer.dispatchEvent(
            new CustomEvent('modal-opened', { id: 'jFHx6UOfw7juSnbiTlWQ-form-component-action' }),
        )
    },
}" x-on:close-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-form-component-action') close()" x-on:open-modal.window="if ($event.detail.id === 'jFHx6UOfw7juSnbiTlWQ-form-component-action') open()" x-trap.noscroll="isOpen" wire:ignore.self="" class="fi-modal block">
<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<div x-show="isOpen" x-transition.duration.300ms.opacity="" class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center" style="display: none;">
    <div aria-hidden="true" x-on:click="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-form-component-action' })" class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer" style="will-change: transform"></div>

    <div x-ref="modalContainer" class="pointer-events-none relative w-full transition my-auto p-4" x-on:modal-closed.stop="const mountedFormComponentActionShouldOpenModal = false


            if (mountedFormComponentActionShouldOpenModal) {
                $wire.unmountFormComponentAction(false)
            }">
        <div x-data="{ isShown: false }" x-init="
                $nextTick(() => {
                    isShown = isOpen
                    $watch('isOpen', () => (isShown = isOpen))
                })
            " x-on:keydown.window.escape="$dispatch('close-modal', { id: 'jFHx6UOfw7juSnbiTlWQ-form-component-action' })" x-show="isShown" x-transition:enter="duration-300" x-transition:leave="duration-300" x-transition:enter-start="scale-95" x-transition:enter-end="scale-100" x-transition:leave-start="scale-95" x-transition:leave-end="scale-100" class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm" style="display: none;" data-has-alpine-state="true">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
</div>
</form>

 <!--[if ENDBLOCK]><![endif]-->
</div>



</div>



            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->


        </div>
    </div>
</div>
