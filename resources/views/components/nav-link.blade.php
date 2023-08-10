@props(['active'])

@php
$classes = ($active ?? false)
            ? 'ml-4 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-gradient-to-r from-pink-800 to-pink-900 bg-origin-border px-4 py-2 text-base font-medium text-white shadow-sm hover:from-pink-700 hover:to-pink-900'
            : 'ml-4 whitespace-nowrap text-base font-medium text-gray-600 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
