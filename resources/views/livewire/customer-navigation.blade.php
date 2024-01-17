<div>
    {{-- Be like water. --}}
    <div>
        {{ $this->previousAction }}
        {{ $this->nextAction }}
    </div>
    <div>
        @vite('resources/css/app.css')
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-950 sm:pl-6">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-950">Type</th>
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
                            </table>
                            {{-- Number of results and Pagination --}}
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

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
