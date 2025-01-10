@props(['items', 'item_name', 'item_properties', 'extra_models', 'table_headers', 'isPaginate' => false])

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

            @if (empty($items))
                <tr>
                    <td class="span-count" colspan="{{ count($table_headers) + 1 }}">No data found</td>
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



</div>


<div>
    @if (!$isPaginate)
        <p>No pagination</p>
    @else
        <div class="pagination-wrapper">
            @if ($items->count() > 0 && $items->hasPages())
                <!-- Check if there are items and pagination exists -->
                <nav>
                    <ul class="pagination">
                        {{-- Previous Page Link --}}

                        @if ($items->onFirstPage())
                            <li class="disabled"><span>&laquo; Previous</span></li>
                        @else
                            <li><a href="{{ $items->previousPageUrl() }}" rel="prev">&laquo; Previous</a></li>
                        @endif

                        {{-- Page Numbers --}}

                        {{-- @foreach (range(1, $items->lastPage()) as $page)
                        @if ($page == $items->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $items->url($page) }}">{{ $page }}</a></li>
                        @endif
                    @endforeach --}}

                        {{-- Next Page Link --}}

                        @if ($items->hasMorePages())
                            <li><a href="{{ $items->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
                        @else
                            <li class="disabled"><span>Next &raquo;</span></li>
                        @endif
                    </ul>
                </nav>

                {{-- Showing X to Y of Z results --}}
                <div class="pagination-info mt-30px">
                    <p>Showing
                        @if ($items->currentPage() * $items->perPage() > $items->total())
                            {{ $items->total() }}
                        @else
                            {{ ($items->currentPage() - 1) * $items->perPage() + 1 }}
                        @endif
                        to
                        @if ($items->currentPage() * $items->perPage() > $items->total())
                            {{ $items->total() }}
                        @else
                            {{ $items->currentPage() * $items->perPage() }}
                        @endif
                        of {{ $items->total() }} results.
                    </p>
                </div>
            @endif
        </div>
    @endif



</div>
