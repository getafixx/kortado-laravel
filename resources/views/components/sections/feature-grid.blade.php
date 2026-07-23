<section class="max-w-6xl mx-auto px-6 py-20">
    <div class="max-w-2xl mb-12">
        @if ($section->eyebrow)
            <p class="text-sm font-medium text-neutral-500 mb-2">{{ $section->eyebrow }}</p>
        @endif
        <h2 class="text-3xl font-semibold tracking-tight">{{ $section->heading }}</h2>
        @if ($section->subheading)
            <p class="mt-4 text-neutral-600">{{ $section->subheading }}</p>
        @endif
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($section->items as $item)
            <div class="p-6 rounded-2xl border border-neutral-200">
                {{-- Stage 3: swap for $item->getFirstMediaUrl('icon') once media library is added --}}
                @if ($item->icon)
                    <div class="mb-4 w-8 h-8">{!! $item->icon !!}</div>
                @endif
                <h3 class="font-medium text-lg">{{ $item->title }}</h3>
                <p class="mt-2 text-neutral-600 text-sm">{{ $item->body }}</p>
                @if ($item->link_url)
                    <a href="{{ $item->link_url }}" class="mt-4 inline-block text-sm font-medium underline">
                        {{ $item->link_text ?? 'Learn more' }}
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</section>
