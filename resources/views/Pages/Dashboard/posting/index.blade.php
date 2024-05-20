@extends('Pages.PageLayout')
@section('AuthMain')

    <body x-data="{ toggleSidebar: true, modalPost: false, }">
        <x-Layouts.DashboardLayout title="{{ $title }}">
            {{-- <div class="grid grid-cols-4 gap-5">
                <div class="col-span-1 px-10 py-8 border-r-2 border-r-blue-500">
                    <x-Elements.Span class="block text-lg text-blue-800 uppercase">TOTAL
                        POSTING</x-Elements.Span>
                    <x-Elements.Span class="block text-lg font-semibold text-blue-600 uppercase">67</x-Elements.Span>
                </div>
                <div class="col-span-1 px-10 py-8 border-r-2 border-r-blue-500">
                    <x-Elements.Span class="block text-lg text-blue-800 uppercase">TOTAL
                        CATEGORY</x-Elements.Span>
                    <x-Elements.Span class="block text-lg font-semibold text-blue-600 uppercase">67</x-Elements.Span>
                </div>
                <div class="col-span-1 px-10 py-8 border-r-2 border-r-blue-500">
                    <x-Elements.Span class="block text-lg text-blue-800 uppercase">TOTAL
                        POSTING</x-Elements.Span>
                    <x-Elements.Span class="block text-lg font-semibold text-blue-600 uppercase">67</x-Elements.Span>
                </div>
                <div class="col-span-1 px-10 py-8 ">
                    <x-Elements.Span class="block text-lg text-blue-800 uppercase">TOTAL
                        POSTING</x-Elements.Span>
                    <x-Elements.Span class="block text-lg font-semibold text-blue-600 uppercase">67</x-Elements.Span>
                </div>


            </div> --}}

            <div class="flex justify-end w-full gap-3 px-2 py-3 mt-2 mb-2 rounded-md bg-blue-50">

                <x-Elements.Link href="{{ route('posting.create') }}"
                    class="flex gap-1 px-5 py-2 text-white bg-blue-600 border-transparent rounded-full">
                    @component('Components.Icons.icon-plus', ['class' => 'w-5 h-5 text-white'])
                    @endcomponent
                    Add Posting
                </x-Elements.Link>

                {{-- Open Modal --}}
                {{-- <x-Elements.Button class="px-2 py-2 text-white bg-blue-500" x-on:click="modalPost = !modalPost">
                    Add Posting
                </x-Elements.Button> --}}
            </div>
            <div class="flex flex-col p-3 shadow-md rounded-xl">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <x-Fragments.Table.PostingTable :posts="$posts" />
                        </div>
                    </div>
                </div>
            </div>
        </x-Layouts.DashboardLayout>

        {{-- Handle Modal --}}
        {{-- <x-Fragments.Modal.Posting.AddPosting name="modalPost" close="modalPost = !modalPost" /> --}}
    </body>
@endsection
