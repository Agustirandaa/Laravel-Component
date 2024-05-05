    <div class="relative" x-data="{ dropdownOpen: false }" x-on:click.away="dropdownOpen = false">
        <x-Elements.Button type="button" class="flex items-center gap-1.5" x-on:click="dropdownOpen = !dropdownOpen">
            <x-Elements.Image src="{{ asset('svg/' . $icon . '.svg') }}" :class="$cIcon" alt="Svg-Icon" />
            {{ $label }}
            <x-Elements.Image src="{{ asset('svg/chevron.svg') }}" :class="$cIcon" alt="Svg-Icon" />
        </x-Elements.Button>

        <div class="absolute hidden right-0 px-1.5 py-2 mt-1 bg-white border shadow-sm border-neutral-100 rounded-lg min-w-60"
            x-bind:class="{ 'block': dropdownOpen, 'hidden': !dropdownOpen }" x-show="dropdownOpen"
            x-transition:enter="transition-transform transition-opacity duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition-transform transition-opacity"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2">
            <ul class="space-y-3">
                {{ $slot }}
            </ul>
        </div>
    </div>
