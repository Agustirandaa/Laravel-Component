@props([
    'type' => 'button',
    'class' => 'text-slate-950',
])

<button type="{{ $type }}" class="flex gap-4 text-sm rounded-lg font-inter {{ $class }}"
    {{ $attributes }}>
    {{ $slot }}
</button>
{{-- class="flex gap-4 text-sm rounded-lg font-inter font-semibold {{ $class }} --}}
