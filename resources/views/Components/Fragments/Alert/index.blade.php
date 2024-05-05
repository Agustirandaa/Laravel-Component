<div class="absolute w-full max-w-sm p-4 bg-white border rounded-lg shadow-sm right-2 top-2 {{ $cType }}"
    role="alert">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <x-elements.Image src="{{ asset('svg/' . $icon . '.svg') }}" class="w-5 h-5" alt="Svg-Icon" />
        </div>
        <div class="ms-3">
            <x-elements.Span :class="$cSpan">
                {{ $message }}
            </x-elements.Span>
        </div>
    </div>
</div>
