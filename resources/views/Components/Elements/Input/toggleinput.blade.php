<div x-data="{ showPassword: false }" class="space-y-2">
    <x-elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-elements.Label>

    <div class="relative w-full">
        <div class="absolute inset-y-0 flex items-center px-3 rounded-sm pointer-events-none">
            <x-elements.Image src="{{ asset('svg/' . $icon . '.svg') }}" :class="$cIcon" alt="Svg-Icon" />
        </div>
        <x-elements.Input.input :$name :$type :$placeholder :id="$label" :class="$cInput"
            value="{{ old($name) }}" x-bind:type="showPassword ? 'text' : 'password'" />

        <x-Elements.Button type="button" class="absolute right-0 flex items-center px-3 rounded-md inset-y-1 z-1"
            x-on:click="showPassword = !showPassword">
            <x-elements.Image src="{{ asset('svg/' . $iconToggle . '.svg') }}" :class="$cIcon"
                x-bind:src="showPassword ? '{{ asset('svg/' . $iconToggle2 . '.svg') }}' :
                    '{{ asset('svg/' . $iconToggle . '.svg') }}'" />
        </x-Elements.Button>

    </div>
    @error($name)
        <x-elements.Span class="text-xs text-red-500">{{ $message }}</x-elements.Span>
    @enderror
</div>
