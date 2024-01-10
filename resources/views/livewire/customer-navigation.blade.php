<div>
    {{-- Be like water. --}}
    <div>
        {{ $this->previousAction }}
        {{ $this->nextAction }}
    </div>

    <!-- resources/views/livewire/my-table-component.blade.php -->
    <div>
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>type</th>
                    <th>email</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($customerArray as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['type'] }}</td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
