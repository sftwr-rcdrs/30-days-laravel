@props(['href'])

@php
    $last_segment_url = request()->segment(1);

    $last_segment_route = explode('/', $href);
    $last_segment_route = $last_segment_route[count($last_segment_route) - 1];

    $is_active =
        $last_segment_url === $last_segment_route || ($last_segment_url === null && $last_segment_route === '');
@endphp


<li>
    <a href="{{ $href }}" class="{{ $is_active ? 'active' : '' }}">{{ $slot }}</a>
</li>
