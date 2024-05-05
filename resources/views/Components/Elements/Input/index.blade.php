<div class="space-y-2">
    <x-Elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-Elements.Label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 flex items-center px-3 pointer-events-none">
            <x-Elements.Image src="{{ asset('svg/' . $icon . '.svg') }}" :class="$cIcon" alt="Svg-Icon" />
        </div>
        <div>
            <x-elements.Input.input :$name :$type :$placeholder :id="$label" :class="$cInput"
                value="{{ old($name) }}" />
        </div>
    </div>
    @error($name)
        <x-elements.Span class="text-xs text-red-500">{{ $message }}</x-elements.Span>
    @enderror
</div>
