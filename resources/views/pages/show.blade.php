<x-layout :title="$page->title" :description="$page->meta_description">
    @foreach ($page->sections as $section)
        @if (view()->exists($section->componentView()))
            @include($section->componentView(), ['section' => $section])
        @else
            {{-- Unknown section type — fails loudly in dev, silently skips in prod --}}
            @if (app()->environment('local'))
                <div class="p-6 bg-red-100 text-red-800">
                    Missing component view: {{ $section->componentView() }}
                </div>
            @endif
        @endif
    @endforeach
</x-layout>
