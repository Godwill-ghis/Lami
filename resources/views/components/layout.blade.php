<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lami')</title>
    @vite('resources/css/app.css')
    <!-- Link Tailwind CSS -->
</head>

<body class="bg-slate-100">
    {{-- navigation --}}
    <x-navbar />


    {{-- The main section --}}
    {{$slot}}


    {{-- Ther footer --}}

    @guest
    <x-footer />
    @endguest
</body>

</html>