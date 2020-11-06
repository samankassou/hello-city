<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ page_title($title ?? null) }}</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="py-6 flex flex-col justify-between min-h-screen items-center">
    <main role="main" class="flex flex-col items-center justify-center">

        @yield('content')

    </main>
    @include('layouts.partials._footer')
</body>
</html>

