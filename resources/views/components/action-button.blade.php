@props(['disabled' => false])

<a {!! $attributes->merge(['class' => 'w-9 h-9 rounded-full border-none font-semibold flex items-center justify-center cursor-pointer transition-all duration-200 ease-in-out']) !!}>
    {{ $slot }}
</a>