<x-Fragments.Sidebar />

<div class="w-full h-screen md:max-w-[calc(100vw-16rem)] right-0 fixed overflow-y-scroll no-scrollbar">
    <x-Fragments.Navbar />
    <div class="p-3 mt-14">
        <div class="mb-4">
            <x-Elements.Span class="block text-xs uppercase text-neutral-500">Overview</x-Elements.Span>
            <x-Elements.Span
                class="font-semibold text-blue-600 uppercase md:text-xl">{{ $title }}</x-Elements.Span>
        </div>
        {{ $slot }}
    </div>
</div>
