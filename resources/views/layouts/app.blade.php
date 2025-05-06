<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger King</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-yellow-100 to-yellow-300 min-h-screen">

    @if (!Request::is('login'))
        @include('components.navbar')
    @endif

    <main class="px-4 sm:px-8 py-6">
        @yield('content')
    </main>

    @if (!Request::is('login') && !Request::is('profile'))
        @include('components.footer')
    @endif

    @vite('resources/js/app.js')

</body>
</html>
