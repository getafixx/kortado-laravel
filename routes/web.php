<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'show'])->defaults('slug', 'home')->name('home');
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');

// Stage 2 will add: Route::prefix('admin')->group(...) via Filament's own panel provider.
