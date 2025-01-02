@props(['items', 'item_name', 'item_properties'])

<div class="table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>

                @foreach ($item_properties as $property)
                    <th>{{ $property }}</th>
                @endforeach
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @if ($items->count() === 0)
                <tr>
                    <td colspan="6">No data found</td>
                </tr>
            @else
                @foreach ($items as $item)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    @foreach ($item_properties as $property)

                    @if (!is_numeric($item->$property))

                        <td>{{ $item->$property }}</td>

                    @else

                        <td>{{ number_format($item->$property) }}</td>

                    @endif

                    @endforeach

                    <td>
                        <a href="{{ route("$item_name.show", ['id' => $item->id]) }}">Show</a>
                    </td>
                </tr>

                @endforeach
            @endif

        </tbody>
    </table>
</div>