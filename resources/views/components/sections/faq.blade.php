<section class="max-w-3xl mx-auto px-6 py-20">
    <h2 class="text-3xl font-semibold tracking-tight mb-10">{{ $section->heading ?? 'Frequently Asked Questions' }}</h2>

    <div class="divide-y divide-neutral-200" x-data="{ open: null }">
        @foreach ($section->items as $item)
            <div class="py-5">
                <button
                    type="button"
                    class="w-full flex justify-between items-center text-left font-medium"
                    @click="open = open === {{ $item->id }} ? null : {{ $item->id }}"
                >
                    <span>{{ $item->title }}</span>
                    <span x-text="open === {{ $item->id }} ? '−' : '+'"></span>
                </button>
                <p class="mt-3 text-neutral-600 text-sm" x-show="open === {{ $item->id }}" x-collapse>
                    {{ $item->body }}
                </p>
            </div>
        @endforeach
    </div>
</section>

{{-- Requires Alpine.js (with the collapse plugin) loaded in the layout for the toggle/animation. --}}
