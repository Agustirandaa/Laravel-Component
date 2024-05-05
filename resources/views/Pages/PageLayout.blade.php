<!DOCTYPE html>
<html lang="en" class="overflow-y-scroll no-scrollbar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGE | Halaman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<x-loader />

@if (session()->has('success'))
    <x-Fragments.Alert cType="shadow-emerald-300" icon="success" message="{{ session('success') }}"
        cSpan="text-sm text-emerald-600" />
@endif

@if (session()->has('error'))
    <x-Fragments.Alert cType="shadow-red-300" icon="alert" message="{{ session('error') }}"
        cSpan="text-sm text-red-600" />
@endif

@yield('AuthMain')

</html>
