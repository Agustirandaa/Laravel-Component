@extends('Pages.PageLayout')
@section('AuthMain')

    <body x-data="{ toggleSidebar: true, modalPost: false, }">
        <x-Layouts.DashboardLayout title="{{ $title }}">
            <div class="flex justify-end w-full gap-3 px-2 py-3 mt-2 mb-5">
                <x-Elements.Link href="{{ route('posts.index') }}"
                    class="flex gap-1 px-5 py-2 text-white bg-blue-600 border-transparent rounded-full hover:bg-blue-700">
                    @component('Components.Icons.icon-arrow', ['class' => 'w-5 h-5 text-white'])
                    @endcomponent
                    Kembali
                </x-Elements.Link>
            </div>

            {{-- Form Edit --}}
            <x-Fragments.Form.Posting.PostingForm action="{{ route('posts.update', $post) }}" :categories="$categories"
                :postEdit="$post" method="PUT" />

        </x-Layouts.DashboardLayout>
    </body>
@endsection
