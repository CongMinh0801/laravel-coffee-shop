<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <header class=" text-blue-500 font-bold">
        @include('parts.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('parts.footer')
    </footer>
</body>
</html>
