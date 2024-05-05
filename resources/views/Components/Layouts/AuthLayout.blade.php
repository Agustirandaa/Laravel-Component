<div class="flex w-full min-h-screen justify-center items-center bg-inherit p-2.5 md:p-1.5">
    <div class="grid w-full max-w-5xl grid-cols-3 overflow-hidden bg-white rounded-md shadow-lg shadow-gray-400">
        <div class="hidden md:col-span-1 bg-emerald-600 md:flex md:justify-center md:h-full md:items-center">
            <img src="{{ asset('images/login.png') }}" alt="Vektor login" />
        </div>
        <div class="col-span-3 p-3 space-y-8 md:col-span-2">
            <h1 class="mt-2 text-lg font-semibold tracking-wide font-inter text-slate-950">
                <span class="text-emerald-600">Company </span>Name
            </h1>
            <div class="p-2 pb-10 md:pt-10 md:pb-20 ">
                <h1 class="text-2xl font-semibold text-center font-inter md:text-3xl text-emerald-600">
                    Halaman Login
                </h1>
                {{-- Components\Fragments\Form\.....blade.php --}}
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
