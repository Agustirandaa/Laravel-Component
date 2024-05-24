@props([
    'class' => '',
])

<span class="font-inter text-[clamp(0.87rem] {{ $class }}" {{ $attributes }}>
    {{ $slot }}
</span>
