<div>
    {{-- Be like water. --}}
    <div>
        {{ $this->createAction }}
        {{ $this->previousAction }}
        {{ $this->nextAction }}
    </div>

     <!-- resources/views/livewire/customer-table.blade.php -->

     <div>
        <section class="pt-4" >
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Name</th>
                                    <th scope="col" class="px-4 py-3">Type</th>
                                    <th scope="col" class="px-4 py-3">Email</th>
                                    <th scope="col" class="px-4 py-3">Postal Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customerArray as $customer)
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $customer['name'] }}</th>
                                        <td class="px-4 py-3">{{ $customer['type'] }}</td>
                                        <td class="px-4 py-3">{{ $customer['email'] }}</td>
                                        <td class="px-4 py-3">{{ $customer['postalCode'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="py-4 px-3">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
