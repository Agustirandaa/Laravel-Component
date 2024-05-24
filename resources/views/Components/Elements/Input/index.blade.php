@props([
    'label' => '',
    'cLabel' => 'font-semibold',
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'cInput' => 'border-blue-200',
    'icon' => '',
    'cIcon' => 'w-4 text-blue-600',
    'value' => '',
])

<div class="space-y-2">

    @if (!empty($label))
        <x-Elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-Elements.Label>
    @endif

    <div class="relative w-full">
        @if (!empty($icon))
            <div class="absolute inset-y-0 flex items-center px-3 pointer-events-none">
                @component('Components.Icons.' . $icon, ['class' => $cIcon])
                @endcomponent
            </div>
        @endif
        <div>
            <x-elements.Input.input :$name :$type :$placeholder :$value :class="$cInput" :id="!empty($label) ? $label : ''"
                {{ $attributes }} />
        </div>
    </div>
    @error($name)
        <x-elements.Span class="text-xs text-red-500">{{ $message }}</x-elements.Span>
    @enderror
</div>
