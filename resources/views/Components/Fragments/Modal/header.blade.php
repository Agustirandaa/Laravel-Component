<div class="flex items-center justify-between p-3 border-b">
    <x-Elements.Span class="text-xl font-semibold text-blue-600 uppercase">{{ $name }}</x-Elements.Span>
    <x-Elements.Button class="p-1.5 text-white border hover:border-red-500 bg-red-400 hover:bg-red-600"
        {{ $attributes }}>
        @component('Components.Icons.icon-x', ['class' => 'w-5 h-5 text-slate-950'])
        @endcomponent
    </x-Elements.Button>
</div>
