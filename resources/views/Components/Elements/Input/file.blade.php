@props([
    'label' => 'Gambar',
    'cLabel' => '',
    'name' => '',
])

<div class="space-y-3">
    <x-Elements.Label :for="$label" :class="$cLabel">{{ $label }}</x-Elements.Label>
    <input type="file" name="{{ $name }}" id="jsfile_upload" class="hidden">
    <div class="flex items-center gap-2">
        <label for="jsfile_upload"
            class="px-3 py-1.5 text-sm text-white bg-blue-700 border border-blue-700 font-inter rounded-xl hover:cursor-pointer">
            Upload File
        </label>
        <span id="jsfile-name" class="text-gray-700">No File Selected</span>
    </div>
</div>

{{-- Lokasi Script di scripts.js --}}
