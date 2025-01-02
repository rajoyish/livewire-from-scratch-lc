<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" x-data x-on:click="$dispatch('search:clear-results')">
    <div class="bg-gray-50 text-black/80">
        <div class="relative min-h-screen flex flex-col p-4  shadow-md">
            <div class="bg-white p-4 shadow-md space-y-8">
                <livewire:search placeholder="Type something to search" />
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
