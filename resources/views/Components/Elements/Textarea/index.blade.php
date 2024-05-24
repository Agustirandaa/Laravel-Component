@props([
    'label' => '',
    'cLabel' => '',
    'name' => '',
    'class' => '',
])

<textarea name="{{ $name }}" id="{{ $name }}" class="{{ $class }}" rows="10">
{{ $slot }}
</textarea>

@error($name)
    <x-elements.Span class="text-xs text-red-500">{{ $message }}</x-elements.Span>
@enderror
