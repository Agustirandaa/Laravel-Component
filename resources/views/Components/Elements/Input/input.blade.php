@props([
    'name' => '',
    'type' => 'text',
    'placeholder' => '',
    'class' => 'border-neutral-300',
])

<input name="{{ $name }}" type="{{ $type }}" {{ $attributes }}
    class ="block w-full p-2 text-sm border rounded-lg bg-inherit font-inter ps-10 focus:outline-none focus:border-transparent focus:ring-indigo-300 focus:ring-1 placeholder:text-slate-500 {{ $class }}"
    placeholder="{{ $placeholder }}" required>
