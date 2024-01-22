<div>
    {{-- Be like water. --}}
    <div class="container mx-auto flex justify-end">
        <div class="relative mt-1 ml-auto">
            <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live.debounce.500ms="searchQuery" type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full sm:w-64 bg-gray-50 focus:outline-none focus:border-amber-600 focus:ring-amber-600 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:outline-none dark:focus:border-amber-500 dark:focus:ring-amber-500" placeholder="Search for customers">
        </div>
    </div>
    <div>
        @vite('resources/css/app.css')
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                @if(!$customerData)
                                    <div class="fi-ta-content relative divide-y divide-gray-200 overflow-x-auto dark:divide-white/10 dark:border-t-white/10">
                                        <div class="fi-ta-empty-state px-6 py-12">
                                            <div class="fi-ta-empty-state-content mx-auto grid max-w-lg justify-items-center text-center">
                                                <div class="fi-ta-empty-state-icon-ctn mb-4 rounded-full bg-gray-100 p-3 dark:bg-gray-500/20">
                                                    <svg class="fi-ta-empty-state-icon h-6 w-6 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="fi-ta-empty-state-heading text-base font-semibold leading-6 text-gray-950 dark:text-white">
                                                    No Customers
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-950 sm:pl-6">
                                                <a href="#" wire:click.prevent="toggleSort" class="group inline-flex">
                                                    Name
                                                    <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "text-gray-400 group-hover:visible group-focus:visible" -->
                                                    <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                                        <svg class="h-5 w-5 transform @if($sortDirection === 'asc') rotate-180 @endif" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">
                                                <a href="#" wire:click.prevent="toggleSort2" class="group inline-flex">
                                                    Type
                                                    <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "text-gray-400 group-hover:visible group-focus:visible" -->
                                                    <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                                        <svg class="h-5 w-5 transform @if($sortDirection2 === 'asc') rotate-180 @endif" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Email</th>
                                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Postal Code</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach ($customerData as $customer)
                                        <tr>
                                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ $customer['name'] }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $customer['type'] }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $customer['email'] }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $customer['postalCode'] }}</td>
                                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <span class="font-bold">{{ ($this->editAction)($customer) }}</span>
                                                <span class="font-bold">{{ ($this->deleteAction)(['customer' => $customer['id']]) }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                @endif
                            </table>
                            {{-- Number of results and Pagination --}}
                            @if(!empty($customerData))
                                <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                    <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700" wire:poll.5000ms="updateSpanContent">
                                        Showing
                                        <span class="font-medium"wire:model="fromCustomer">{{ $fromCustomer }}</span>
                                        to
                                        <span class="font-medium"wire:model="toCustomer">{{ $toCustomer }}</span>
                                        of
                                        <span class="font-medium" wire:model="totalCustomers">{{ $totalCustomers }}</span>
                                        results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" wire:click.prevent="previousPage" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                <span class="sr-only">Previous</span>
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>

                                            @if ($page > 3)
                                                <a href="#" wire:click.prevent="goToPage(1)" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold {{ $page == 1 ? 'text-amber-600' : 'text-gray-900' }} ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">1</a>
                                                @if ($page > 4)
                                                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                                @endif
                                            @endif

                                            @for ($i = max(1, $page - 1); $i <= min($totalPages, $page + 1); $i++)
                                                <a href="#" wire:click.prevent="goToPage({{ $i }})" class="relative inline-flex items-center {{ $page == $i ? 'text-amber-600' : 'text-gray-900' }} px-4 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                    {{ $i }}
                                                </a>
                                            @endfor

                                            @if ($page < $totalPages - 2)
                                                @if ($page < $totalPages - 3)
                                                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                                                @endif
                                                <a href="#" wire:click.prevent="goToPage({{ $totalPages }})" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold {{ $page == $totalPages ? 'text-amber-600' : 'text-gray-900' }} ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">{{ $totalPages }}</a>
                                            @endif

                                            <a href="#" wire:click.prevent="nextPage" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                <span class="sr-only">Next</span>
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                    </div>
                                    <x-filament-actions::modals />
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
