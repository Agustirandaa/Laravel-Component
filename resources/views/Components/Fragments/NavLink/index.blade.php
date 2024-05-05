<li {{ $attributes->merge(['class' => 'rounded-lg']) }}>
    <x-Elements.Link :href="$href"
        class="flex items-center gap-3 px-3 py-2 text-sm md:text-[15px] font-inter text-slate-950">
        {{-- Jika tidak ada attribut icon --}}
        @if (!empty($icon))
            <x-Elements.Image src="{{ asset('svg/' . $icon . '.svg') }}" :class="$cIcon" alt="Svg-Icon" />
        @endif
        {{ $slot }}
    </x-Elements.Link>
</li>
