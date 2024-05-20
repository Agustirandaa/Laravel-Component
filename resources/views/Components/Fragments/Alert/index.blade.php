@props([
    'cType' => '',
    'cSpan' => '',
    'icon' => '',
    'fillColor' => 'red',
    'message' => '',
])

<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 10000)"
    class="absolute z-50 w-full max-w-sm p-4 bg-white border rounded-lg shadow-sm right-2 top-2 {{ $cType }}"
    role="alert">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            @component('Components.icons.icon-alert', ['color' => $fillColor, 'class' => 'w-7'])
            @endcomponent
        </div>
        <div class="flex items-center justify-between w-full ms-3">
            <x-elements.Span :class="$cSpan">
                {{ $message }}
            </x-elements.Span>

            <x-Elements.Button class="p-1 text-white border border-red-500 " x-on:click="show = false">
                @component('Components.Icons.icon-x', ['class' => 'w-5 h-5 text-slate-950'])
                @endcomponent
            </x-Elements.Button>
        </div>
    </div>
</div>
