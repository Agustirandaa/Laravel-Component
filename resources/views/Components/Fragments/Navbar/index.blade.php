<nav
    class="fixed justify-between items-center top-0 right-0 flex w-full md:max-w-[calc(100vw-16rem)] py-1.5 px-4 bg-white border-b border-neutral-200">
    <div class="flex items-center gap-2">
        <button x-on:click="toggleSidebar = !toggleSidebar" type="button"
            class="p-1 border rounded-md md:hidden hover:bg-gray-50">
            <x-Elements.Image src="{{ asset('svg/list.svg') }}" class="w-5 h-5" alt="Svg-Icon" />
        </button>
        <x-Elements.Span class="text-xl font-semibold uppercase text-emerald-600">
            web blog
        </x-Elements.Span>
    </div>
    <div class="flex items-center gap-3">
        {{-- <ul class="flex">
            <x-Fragments.NavLink href="#">Menu 1</x-Fragments.NavLink>
            <x-Fragments.NavLink href="#">Menu 2</x-Fragments.NavLink>
        </ul> --}}
        <x-Fragments.Dropdown label="{{ Auth::user()->fullname }}" icon="user" cIcon="w-4">
            <x-Fragments.NavLink href="#" icon="grid" cIcon="w-4"
                class="hover:bg-gray-50">Dashboard</x-Fragments.NavLink>
            <x-Fragments.NavLink href="#" icon="user" cIcon="w-4"
                class="hover:bg-gray-50">Profile</x-Fragments.NavLink>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <x-Elements.Button type="submit" class="w-full px-2 hover:bg-gray-50">
                    <x-Elements.Image src="{{ asset('svg/rocket-takeoff.svg') }}" class="w-4" alt="Svg-Icon" />
                    Logout
                </x-Elements.Button>
            </form>
        </x-Fragments.Dropdown>
    </div>
</nav>
