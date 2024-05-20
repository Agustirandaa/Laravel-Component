<form action="{{ route('store_register') }}" method="POST" enctype="multipart/form-data"
    class="grid grid-cols-2 gap-4 px-6 pb-5 mt-4 space-y-3 md:px-1 md:space-y-3">
    @csrf

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Nama" name="fullname" type="text" placeholder="Nama anda..." icon="icon-user" />
    </div>

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Username" name="username" type="text" placeholder="Username anda..."
            icon="icon-user" />
    </div>

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Email" name="email" type="email" placeholder="Email anda..."
            icon="icon-envelope" />
    </div>

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Tanggal lahir" name="birthday" type="date" placeholder="Tanggal lahir ..."
            icon="icon-calendar" />
    </div>

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input.toggleinput label="Password" name="password" type="password" placeholder="Password anda..."
            icon="icon-key" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input.toggleinput label="Konfirmasi Password" name="confirm_password" type="password"
            placeholder="Password anda..." icon="icon-key" />
    </div>

    <div class="col-span-2">
        <x-Elements.Button type="submit" class="w-full font-semibold  justify-center text-white bg-blue-500 py-2.5">
            Register
        </x-Elements.Button>
    </div>

    <x-elements.Label class="text-neutral-700">
        Sudah mempunyai akun ?
        <x-elements.Link href="{{ route('login') }}"
            class="font-semibold text-blue-600 underline">Login</x-elements.Link>
    </x-elements.Label>
</form>
