@props([
    'class' => '',
    'href' => '',
    'icon' => '',
    'cIcon' => 'w-4 text-blue1',
])

<li class="rounded-lg {{ $class }}" {{ $attributes }}>
    <x-Elements.Link :href="$href" class="flex items-center gap-3 px-3 py-2 text-sm md:text-[15px] font-inter ">
        {{-- Jika tidak ada attribut icon --}}
        @if (!empty($icon))
            @component('Components.Icons.' . $icon, ['class' => $cIcon])
            @endcomponent
        @endif
        {{ $slot }}
    </x-Elements.Link>
</li>
