<div {{ $attributes }} x-bind:class="{ 'flex': {{ $name }}, 'hidden': !{{ $name }} }"
    class="fixed inset-0 z-10 items-center justify-center hidden bg-black bg-opacity-50">
    {{ $slot }}
</div>
