@props(['value' => '', 'class' => ''])

<option value="{{ $value }}" class="text-gray-600 {{ $class }}" {{ $attributes }}>{{ $slot }}
</option>
