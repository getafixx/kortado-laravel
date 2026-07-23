@php
    $cta = $section->content['cta_text'] ?? null;
    $ctaUrl = $section->content['cta_url'] ?? '#';
@endphp

<section class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
    <div>
        @if ($section->eyebrow)
            <p class="text-sm font-semibold text-accent-dark mb-3 uppercase tracking-wide">{{ $section->eyebrow }}</p>
        @endif

        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
            {{ $section->heading }}
        </h1>

        @if ($section->subheading)
            <p class="mt-6 text-lg text-ink/70 max-w-xl">
                {{ $section->subheading }}
            </p>
        @endif

        @if ($cta)
            <a href="{{ $ctaUrl }}"
               class="inline-block mt-8 px-6 py-3 rounded-full bg-accent text-ink font-semibold hover:bg-accent-dark hover:text-white transition-colors">
                {{ $cta }}
            </a>
        @endif
    </div>

    {{-- Stage 3: replace with an uploaded hero image via media library --}}
    <div class="rounded-xl2 bg-accent aspect-[4/3] flex items-center justify-center text-ink/40 text-sm">
        Hero image placeholder
    </div>
</section>
