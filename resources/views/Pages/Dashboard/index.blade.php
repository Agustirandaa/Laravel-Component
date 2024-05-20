@extends('Pages.PageLayout')
@section('AuthMain')

    <body x-data="{ toggleSidebar: true }">
        <x-layouts.DashboardLayout title="{{ $title }}">
            <p class="text-[clamp(0.96rem,1vw,1rem)] text-bluesky">
                Contetnt, Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse libero vero fugiat iusto quo facilis
                perspiciatis soluta voluptates laboriosam. Animi eius nobis, optio ipsam explicabo, quod accusantium nihil
                voluptatem omnis quisquam vitae dignissimos doloremque dolorem provident. Possimus ipsum iste ullam
                explicabo
                fugiat dolores deserunt fuga non aliquam qui aperiam eaque consequatur tempore veniam quis, necessitatibus
                natus. Architecto delectus doloremque, excepturi mollitia consequuntur, soluta aperiam voluptate maxime sed
                facere aliquam veritatis cumque at iste debitis eaque eum nemo officia? Est recusandae quae in suscipit ipsa
                perspiciatis. Dolore est quam porro, voluptatibus eum libero vero explicabo? Adipisci velit ipsa architecto
                nihil quis.
            </p>
        </x-layouts.DashboardLayout>
    </body>
@endsection
