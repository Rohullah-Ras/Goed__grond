@props(['header' => null])

<x-layouts.app>
    @if ($header)
        <x-slot name="header">
            {{ $header }}
        </x-slot>
    @endif

    {{ $slot }}
</x-layouts.app>
