@props([
    'label' => '',
    'cLabel' => 'text-neutral-700',
])

<div class="flex items-center gap-3">
    <input id="{{ $label }}" type="checkbox">
    <x-elements.Label :for="$label" :class="$cLabel"> {{ $label }} </x-elements.Label>
</div>
