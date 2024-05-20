@props([
    'for' => '',
    'class' => 'font-semibold',
])

<div>
    <label class="font-inter text-[clamp(0.90rem,1vw,1rem)] {{ $class }}" for="{{ $for }}">
        {{ $slot }}
    </label>
</div>
