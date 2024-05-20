<nav
    class="fixed justify-between items-center top-0 right-0 flex w-full md:max-w-[calc(100vw-16rem)] py-2.5 px-4 bg-white border-b border-gray-50">
    <div class="flex items-center gap-2">
        <button x-on:click="toggleSidebar = !toggleSidebar" type="button"
            class="p-1 border border-blue-400 rounded-md md:hidden hover:bg-blue-50">
            @component('Components.Icons.icon-list', ['class' => 'w-4 h-4 text-blue-600'])
            @endcomponent
        </button>
        {{-- <x-Elements.Span class="text-xl font-semibold text-blue-500 uppercase">
            web blog
        </x-Elements.Span> --}}
    </div>
    <div class="flex items-center gap-3">
        <ul class="flex">
            <x-Fragments.NavLink href="#" class="hover:bg-gray-50">Dashboard</x-Fragments.NavLink>
        </ul>
        <x-Fragments.Dropdown label="{{ Auth::user()->fullname }}" icon="icon-user">
            <x-Fragments.NavLink href="#" icon="icon-grid"
                class="hover:bg-blue-500">Dashboard</x-Fragments.NavLink>
            <x-Fragments.NavLink href="#" icon="icon-user"
                class="hover:bg-blue-500 ">Profile</x-Fragments.NavLink>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <x-Elements.Button type="submit" class="w-full items-center p-2.5 hover:bg-blue-500"
                    onclick="localStorage.clear();">
                    @component('Components.Icons.icon-rocket-tackoff', ['class' => 'w-4 text-blue1'])
                    @endcomponent
                    Logout
                </x-Elements.Button>
            </form>
        </x-Fragments.Dropdown>
    </div>
</nav>
