@props([
    'class' => '',
    'icon' => '',
    'cIcon' => 'w-4 text-blue1',
    'label' => 'Null Label',
])

<li class="rounded-lg {{ $class }}" x-data="{ dropdownOpen: false }" {{ $attributes }}>
    <x-Elements.Button type="button" class="flex items-center justify-between w-full px-3 py-2 text-sm md:text-[15px]"
        x-on:click="dropdownOpen = !dropdownOpen">
        <div class="flex items-center gap-3">
            @component('Components.Icons.' . $icon, ['class' => $cIcon])
            @endcomponent
            {{ $label }}
        </div>
        @component('Components.Icons.icon-chevron', ['class' => 'w-4', 'black' => 'white'])
        @endcomponent
    </x-Elements.Button>
    <ul class="px-2 pb-2 mt-1 space-y-1 ps-5" x-show="dropdownOpen"
        x-transition:enter="transition-transform transition-opacity duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition-transform transition-opacity"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2">
        {{-- Components\Fragments\NavLink\.....blade.php --}}
        {{ $slot }}
    </ul>
</li>
