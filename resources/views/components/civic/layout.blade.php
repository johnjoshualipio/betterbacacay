@props([
    'title' => null,
    'description' => null,
    'image' => null,
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#075D73">
    <meta name="description" content="{{ $description ?? config('civic.tagline') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wdth,wght@75..100,400..700&family=Kalam:wght@400;700&display=swap" rel="stylesheet">
    @if ($image)
        <meta property="og:image" content="{{ asset(ltrim($image, '/')) }}">
    @endif
    <meta property="og:title" content="{{ $title ? $title . ' | ' : '' }}{{ config('civic.name') }}">
    <meta property="og:description" content="{{ $description ?? config('civic.tagline') }}">
    <meta name="twitter:card" content="summary_large_image">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="civic-site">
    <a class="civic-skip-link" href="#main-content">Skip to content</a>
    <x-civic.emergency-bar />
    <x-civic.navbar />
    <main id="main-content">
        {{ $slot }}
    </main>
    <x-civic.footer />
    @stack('scripts')
</body>
</html>
