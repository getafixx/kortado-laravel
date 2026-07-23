<section class="max-w-6xl mx-auto px-6 py-20">
    <div class="max-w-2xl mb-12">
        @if ($section->eyebrow)
            <p class="text-sm font-semibold text-accent-dark mb-2 uppercase tracking-wide">{{ $section->eyebrow }}</p>
        @endif
        <h2 class="text-3xl font-extrabold tracking-tight">{{ $section->heading }}</h2>
        @if ($section->subheading)
            <p class="mt-4 text-ink/70">{{ $section->subheading }}</p>
        @endif
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        @foreach ($section->items as $item)
            <div class="p-6 rounded-xl2 border border-black/10 bg-white hover:shadow-md transition-shadow">
                @if ($item->icon)
                    <div class="mb-4 w-8 h-8 rounded-lg bg-accent/30 flex items-center justify-center">{!! $item->icon !!}</div>
                @endif
                <h3 class="font-semibold text-lg">{{ $item->title }}</h3>
                <p class="mt-2 text-ink/60 text-sm leading-relaxed">{{ $item->body }}</p>
                @if ($item->link_url)
                    <a href="{{ $item->link_url }}" class="mt-4 inline-block text-sm font-semibold text-accent-dark hover:underline">
                        {{ $item->link_text ?? 'Learn more' }} &rarr;
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</section>
