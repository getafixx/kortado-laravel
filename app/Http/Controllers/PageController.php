<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;

class PageController extends Controller
{
    public function show(string $slug = 'home'): View
    {
        $page = Page::where('slug', $slug)
            ->where('is_published', true)
            ->with(['sections' => fn ($q) => $q->where('is_visible', true)->with('items')])
            ->firstOrFail();

        return view('pages.show', compact('page'));
    }
}
