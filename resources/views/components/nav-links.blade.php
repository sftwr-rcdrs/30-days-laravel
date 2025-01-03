@props(['active' => false, 'isButton' => 'a'])

@if ($isButton === 'a')
    <a {{ $attributes }}>{{ $slot }}</a>
@else
    <button {{ $attributes }}>{{ $slot }}</button>
@endif
