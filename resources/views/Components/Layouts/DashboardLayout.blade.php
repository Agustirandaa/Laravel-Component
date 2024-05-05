<x-Fragments.Sidebar />

<div class="w-full h-screen md:max-w-[calc(100vw-16rem)] right-0 fixed overflow-y-scroll no-scrollbar">
    <x-Fragments.Navbar />
    <div class="p-3 mt-14">
        {{ $slot }}
    </div>
</div>
