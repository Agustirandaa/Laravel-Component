<div class="flex items-center gap-3">
    <input id="{{ $label }}" type="checkbox" {{ $attributes->merge(['class' => 'block']) }}>
    <x-elements.Label :for="$label" :class="$cLabel"> {{ $label }} </x-elements.Label>
</div>
