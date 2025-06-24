<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pansion Katić</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-gray-800">
    <div class="min-h-screen">
        @include('layouts.navigation')
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
