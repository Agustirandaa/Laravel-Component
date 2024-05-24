@props([
    'label' => '',
    'cLabel' => 'font-semibold',
    'name' => '',
])


<div class="space-y-2">
    <x-Elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-Elements.Label>
    <select name="{{ $name }}" id="{{ $name }}" required
        class="block w-full p-2 text-sm border border-blue-300 rounded-lg bg-inherit font-inter focus:outline-none focus:border-transparent focus:ring-indigo-300 focus:ring-1 placeholder:text-slate-500">
        {{ $slot }}
    </select>
</div>
