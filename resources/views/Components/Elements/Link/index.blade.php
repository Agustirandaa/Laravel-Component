@props([
    'href' => '',
    'class' => 'text-slate-950',
])

<a class="font-inter text-sm {{ $class }}" href="{{ $href }}">{{ $slot }}</a>
