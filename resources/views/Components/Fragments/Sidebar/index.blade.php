<div class="fixed top-0 z-10 w-64 h-screen bg-white" x-show="toggleSidebar"
    x-on:resize.window="window.innerWidth < 768 ? (toggleSidebar = false) : (toggleSidebar = true)"
    x-transition:enter="transition ease-in-out duration-100"
    x-transition:enter-start="opacity-0 transform -translate-x-full"
    x-transition:enter-end="opacity-100 transform translate-x-0" x-transition:leave="transition ease-in-out duration-100"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform -translate-x-full">
    <div class="flex justify-between px-3 py-3.5">
        <x-Elements.Span class="flex items-center gap-3 font-semibold uppercase text-slate-800 md:text-xl">
            @component('Components.Icons.icon-box', ['class' => 'text-blue-600 w-5 h-5'])
            @endcomponent
            D - Board
        </x-Elements.Span>
        <button x-on:click="toggleSidebar = !toggleSidebar" type="button"
            class="p-1 border border-red-500 rounded-md md:hidden hover:bg-red-100">
            @component('Components.Icons.icon-x', ['class' => 'w-4 h-4 text-red-600'])
            @endcomponent
        </button>
    </div>

    <div class="px-3" x-data="{ activeIndex: parseInt(localStorage.getItem('activeIndex')) || 0 }">
        <ul class="py-5 mt-3 space-y-3">
            <x-Elements.Span class="text-xs text-neutral-800">Application</x-Elements.Span>

            <x-Fragments.NavLink href="{{ route('dashboard') }}" icon="icon-grid"
                class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 0 ? activeIndex = null : activeIndex = 0; localStorage.setItem('activeIndex', 0)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 0 }">
                Dashboard
            </x-Fragments.NavLink>

            <x-Fragments.NavLink href="{{ route('posts.index') }}" icon="icon-copy"
                class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 1 ? activeIndex = null : activeIndex = 1; localStorage.setItem('activeIndex', 1)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 1 }">
                Posting
            </x-Fragments.NavLink>

            <x-Fragments.NavLink href="#" icon="icon-grid" class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 2 ? activeIndex = null : activeIndex = 2; localStorage.setItem('activeIndex', 2)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 2 }">
                Component
            </x-Fragments.NavLink>


            <x-Fragments.NavLink.LinkDropdown label="Account User" href="#" icon="icon-user"
                class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 3 ? activeIndex = null : activeIndex = 3; localStorage.setItem('activeIndex', 3)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 3 }">
                <x-Fragments.NavLink href="#"
                    class="border-l hover:bg-blue-300 hover:text-slate-950">Overview</x-Fragments.NavLink>
                <x-Fragments.NavLink href="#"
                    class="border-l hover:bg-blue-300 hover:text-slate-950">User</x-Fragments.NavLink>
            </x-Fragments.NavLink.LinkDropdown>

            <x-Fragments.NavLink.LinkDropdown label="Account User" href="#" icon="icon-user"
                class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 4 ? activeIndex = null : activeIndex = 4; localStorage.setItem('activeIndex', 4)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 4 }">
                <x-Fragments.NavLink href="#"
                    class="border-l hover:bg-blue-300 hover:text-slate-950">Overview</x-Fragments.NavLink>
                <x-Fragments.NavLink href="#"
                    class="border-l hover:bg-blue-300 hover:text-slate-950">User</x-Fragments.NavLink>
            </x-Fragments.NavLink.LinkDropdown>

            <x-Fragments.NavLink href="#" icon="icon-grid" class="hover:bg-blue-500 hover:text-white"
                x-on:click="activeIndex === 5 ? activeIndex = null : activeIndex = 5; localStorage.setItem('activeIndex', 5)"
                x-bind:class="{ 'bg-blue-500 text-white': activeIndex === 5 }">
                Component
            </x-Fragments.NavLink>
        </ul>
    </div>
</div>
