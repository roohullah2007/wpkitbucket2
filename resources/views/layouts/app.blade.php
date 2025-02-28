<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InvestorHare')</title>

    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="InvestorHare" />
    <meta property="og:image:width" content="344" />
    <meta property="og:image:height" content="239" />
    <meta name="twitter:card" content="'summary_large_image'" />
    @stack('meta')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="antialiased box-border overflow-x-hidden">
    <x-navbar />
    <main class="flex w-screen">
    <div class="md:w-screen bg-[#F9F5F3] md:pt-20"> <!-- Added padding-top -->
        <div>
            @yield('content')
        </div>
    </div>
</main>
</body>
</html