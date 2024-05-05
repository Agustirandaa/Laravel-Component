<form action="{{ route('store_register') }}" method="POST" enctype="multipart/form-data"
    class="grid grid-cols-2 gap-4 px-6 pb-5 mt-4 space-y-3 md:px-1 md:space-y-3">
    @csrf

    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Nama" cLabel="md:text-base font-semibold" name="fullname" type="text"
            placeholder="Nama anda..." cInput="border-emerald-400" icon="user" cIcon="w-4" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Username" cLabel="md:text-base font-semibold" name="username" type="text"
            placeholder="Username anda..." cInput="border-emerald-400" icon="user" cIcon="w-4" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Email" cLabel="md:text-base font-semibold" name="email" type="email"
            placeholder="Email anda..." cInput="border-emerald-400" icon="user" cIcon="w-4" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input label="Tanggal lahir" cLabel="md:text-base font-semibold" name="birthday" type="date"
            placeholder="Tanggal lahir ..." cInput="border-emerald-400" icon="calendar" cIcon="w-4" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input.toggleinput label="Password" cLabel="md:text-base font-semibold" name="password"
            type="password" placeholder="Password anda..." cInput="border-emerald-400" icon="key" cIcon="w-4"
            iconToggle="eye" iconToggle2="eye-slash" />
    </div>
    <div class="col-span-2 md:col-span-1">
        <x-Elements.Input.toggleinput label="Konfirmasi Password" cLabel="md:text-base font-semibold"
            name="confirm_password" type="password" placeholder="Password anda..." cInput="border-emerald-400"
            icon="key" cIcon="w-4" iconToggle="eye" iconToggle2="eye-slash" />
    </div>

    <div class="col-span-2">
        <x-Elements.Button type="submit" class="justify-center w-full text-white bg-emerald-600">Sign
            In</x-Elements.Button>
    </div>
    <x-elements.Label class="text-neutral-700">
        Sudah mempunyai akun ?
        <x-elements.Link href="{{ route('login') }}"
            class="font-semibold text-blue-600 underline">Login</x-elements.Link>
    </x-elements.Label>
</form>
