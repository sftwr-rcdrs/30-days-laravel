@props(['items', 'item_name', 'item_properties', 'extra_models', 'table_headers'])

<div class="table-wrapper">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>

                @foreach ($table_headers as $table_header)
                    <th>{{ $table_header }}</th>
                @endforeach

                {{-- @foreach ($extra_models as $extra_model)
                    @foreach ($items[0]->$extra_model->getAttributes() as $key => $value)
                        @if ($loop->iteration == 2)
                            <th>{{ $extra_model . '_' . $key }}</th>
                        @endif
                    @endforeach
                @endforeach --}}
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

                        @foreach ($extra_models as $extra_model)
                            @foreach ($items[0]->$extra_model->getAttributes() as $key => $value)
                                @if ($loop->iteration == 2)
                                    <td>{{ $item->$extra_model->$key }}</td>
                                @endif
                            @endforeach
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
