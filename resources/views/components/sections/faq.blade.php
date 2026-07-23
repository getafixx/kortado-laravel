<section class="max-w-3xl mx-auto px-6 py-20">
    <h2 class="text-3xl font-extrabold tracking-tight mb-10">{{ $section->heading ?? 'Frequently Asked Questions' }}</h2>

    <div class="divide-y divide-black/10" x-data="{ open: null }">
        @foreach ($section->items as $item)
            <div class="py-5">
                <button
                    type="button"
                    class="w-full flex justify-between items-center text-left font-semibold"
                    @click="open = open === {{ $item->id }} ? null : {{ $item->id }}"
                >
                    <span>{{ $item->title }}</span>
                    <span class="text-accent-dark text-xl leading-none" x-text="open === {{ $item->id }} ? '\u2212' : '+'"></span>
                </button>
                <p class="mt-3 text-ink/60 text-sm leading-relaxed" x-show="open === {{ $item->id }}" x-collapse>
                    {{ $item->body }}
                </p>
            </div>
        @endforeach
    </div>
</section>
