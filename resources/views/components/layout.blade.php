<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Kortado' }}</title>
    @if (!empty($description))
        <meta name="description" content="{{ $description }}">
    @endif

    {{-- Tailwind via CDN for now — swap for the Vite build once resources/css + resources/js are wired up properly. --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine.js — required for the FAQ accordion's x-data/x-show/x-collapse --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased text-neutral-900">
    {{ $slot }}
</body>
</html>