@props([
    'label' => 'Gambar',
    'cLabel' => '',
    'name' => '',
    'postEditFile' => null,
])

<div class="space-y-3">
    <x-Elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-Elements.Label>
    <input type="hidden" name="{{ $name }}_old" value="{{ $postEditFile }}">
    <input type="file" name="{{ $name }}" id="jsfile_upload" class="hidden">
    <div class="flex items-center gap-2">
        <label for="jsfile_upload"
            class="px-3 py-1.5 text-sm text-white bg-blue-700 border border-blue-700 font-inter rounded-xl hover:cursor-pointer">
            Upload File
        </label>
    </div>
    @error($name)
        <x-elements.Span class="text-xs text-red-500">{{ $message }}</x-elements.Span>
    @enderror

    <div class="w-full p-1 border rounded-full">
        @if (!empty($postEditFile))
            <x-Elements.Link href="{{ asset($postEditFile) }}" target="_blank" class="font-semibold text-blue-600 ps-2"
                id="jsfile-name">
                {{ basename($postEditFile) }}
            </x-Elements.Link>
        @else
            <x-Elements.Span class="block text-sm ps-2" id="jsfile-name">No File Selected</x-Elements.Span>
        @endif

    </div>
</div>

{{-- Lokasi Script di scripts.js --}}
