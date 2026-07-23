<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Kortado' }}</title>
    @if (!empty($description))
        <meta name="description" content="{{ $description }}">
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN for now — swap for the Vite build once resources/css + resources/js are wired up properly. --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        // Working palette pulled from Kortado's tone (charcoal text, warm neutral
                        // background, bright yellow accent from the hero photography). Adjust hex
                        // values against the live site's actual CSS once you can inspect it directly.
                        ink: '#191714',
                        paper: '#FBF9F6',
                        accent: {
                            DEFAULT: '#F4C324',
                            dark: '#D9A80F',
                        },
                    },
                    borderRadius: {
                        'xl2': '1.25rem',
                    },
                },
            },
        }
    </script>

    {{-- Alpine.js — required for the FAQ accordion's x-data/x-show/x-collapse --}}
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased font-sans text-ink bg-paper">
    <header class="border-b border-black/5">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="font-extrabold tracking-tight text-lg">Kortado</a>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="/about" class="hover:opacity-70">About</a>
                <a href="/solutions" class="hover:opacity-70">Solutions</a>
                <a href="/contact" class="hover:opacity-70">Contact</a>
            </nav>
            <a href="/demo" class="inline-flex items-center px-4 py-2 rounded-full bg-ink text-paper text-sm font-semibold hover:opacity-90">
                Request a demo
            </a>
        </div>
    </header>

    {{ $slot }}

    <footer class="border-t border-black/5 mt-10">
        <div class="max-w-6xl mx-auto px-6 py-10 flex flex-col md:flex-row justify-between gap-6 text-sm text-ink/60">
            <div class="flex gap-6">
                <a href="/about" class="hover:text-ink">About</a>
                <a href="/solutions" class="hover:text-ink">Solutions</a>
                <a href="/contact" class="hover:text-ink">Contact</a>
            </div>
            <div class="flex gap-6">
                <span>&copy; {{ date('Y') }} Kortado. All rights reserved.</span>
                <a href="/privacy" class="hover:text-ink">Privacy Policy</a>
                <a href="/terms" class="hover:text-ink">Terms &amp; Conditions</a>
            </div>
        </div>
    </footer>
</body>
</html>
