@extends('Pages.PageLayout')
@section('AuthMain')

    <body class="bg-gradient-walpaper">
        <x-layouts.AuthLayout title="{{ $title }}">
            <x-Fragments.Form.LoginForm />
        </x-layouts.AuthLayout>
    </body>
@endsection
