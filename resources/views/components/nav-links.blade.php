@props(['href'])

@php
    $isActive = request()->is(ltrim($href, '/'));
@endphp

<li>
    <a href="{{ $href }}" 
       {{ $attributes->merge(['class' => $isActive ? 'active' : '']) }}>
        {{ $slot }}
    </a>
</li>