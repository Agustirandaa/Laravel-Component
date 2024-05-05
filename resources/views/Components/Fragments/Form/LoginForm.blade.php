<form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data"
    class="px-6 space-y-5 pb-14 md:px-20 md:space-y-6">
    @csrf
    <x-Elements.Input label="Email" cLabel="md:text-base font-semibold" name="email" type="email"
        placeholder="Email anda..." cInput="border-emerald-400" icon="envelope" cIcon="w-4" />

    <x-Elements.Input.toggleinput label="Password" cLabel="md:text-base font-semibold" name="password" type="password"
        placeholder="Password anda..." cInput="border-emerald-400" icon="key" cIcon="w-4" iconToggle="eye"
        iconToggle2="eye-slash" />

    <div class="flex items-center justify-between">
        <x-Elements.Input.Checkbox label="Remember me" cLabel="text-neutral-700" />
        <x-Elements.Link href="#" class="text-emerald-600">Lupa password</x-Elements.Link>
    </div>

    <x-Elements.Button type="submit" class="justify-center w-full text-white bg-emerald-600">Sign
        In</x-Elements.Button>

    <x-elements.Label class="text-neutral-700">
        Belum mempunyai akun ?
        <x-elements.Link href="{{ route('register') }}"
            class="font-semibold text-blue-600 underline">Register</x-elements.Link>
    </x-elements.Label>
</form>
