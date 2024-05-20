<form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data"
    class="px-6 space-y-5 pb-14 md:px-20 md:space-y-6">
    @csrf
    <x-Elements.Input label="Email" name="email" type="email" placeholder="Email anda..." icon="icon-envelope" />

    <x-Elements.Input.toggleinput label="Password" name="password" type="password" placeholder="Password anda..."
        icon="icon-key" />

    <div class="flex items-center justify-between">
        <x-Elements.Input.Checkbox label="Remember me" />
        <x-Elements.Link href="#" class="text-blue-500">Lupa password</x-Elements.Link>
    </div>

    <x-Elements.Button type="submit" class="w-full justify-center font-semibold  text-white bg-blue-500 py-2.5">
        Sign In
    </x-Elements.Button>

    <x-elements.Label class="text-neutral-700">
        Belum mempunyai akun ?
        <x-elements.Link href="{{ route('register') }}"
            class="font-semibold text-blue-600 underline">Register</x-elements.Link>
    </x-elements.Label>
</form>
