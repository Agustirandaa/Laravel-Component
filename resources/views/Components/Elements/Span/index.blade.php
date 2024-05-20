@props([
    'class' => '',
])

<span class="font-inter text-[clamp(0.87rem] {{ $class }}">
    {{ $slot }}
</span>
