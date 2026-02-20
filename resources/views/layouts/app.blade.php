<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Juden Petroleum Private Limited')</title>
    <meta name="description" content="Juden Petroleum Private Limited - The best at your service.">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logos/Primary%20Logo.svg') }}">
    <link rel="shortcut icon" href="{{ asset('logos/Primary%20Logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <script src="{{ asset('js/site.js') }}" defer></script>
</head>
<body class="site-body">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
