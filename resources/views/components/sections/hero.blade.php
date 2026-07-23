@php
    // $section->content is a JSON field, e.g.:
    // { "cta_text": "Request a demo", "cta_url": "/demo", "image": "hero.png" }
    $cta = $section->content['cta_text'] ?? null;
    $ctaUrl = $section->content['cta_url'] ?? '#';
@endphp

<section class="max-w-5xl mx-auto px-6 py-24 text-center">
    @if ($section->eyebrow)
        <p class="text-sm font-medium text-neutral-500 mb-3">{{ $section->eyebrow }}</p>
    @endif

    <h1 class="text-4xl md:text-5xl font-semibold tracking-tight">
        {{ $section->heading }}
    </h1>

    @if ($section->subheading)
        <p class="mt-6 text-lg text-neutral-600 max-w-2xl mx-auto">
            {{ $section->subheading }}
        </p>
    @endif

    @if ($cta)
        <a href="{{ $ctaUrl }}"
           class="inline-block mt-8 px-6 py-3 rounded-full bg-black text-white font-medium">
            {{ $cta }}
        </a>
    @endif
</section>
