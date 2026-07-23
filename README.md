# Kortado rebuild — Stage 1: base skeleton

This is not a full Laravel install — it's the app-specific layer (models,
migrations, controller, routes, views) meant to be dropped into a fresh
Laravel project.

## Setup

```bash
composer create-project laravel/laravel kortado
cd kortado
# copy in: app/, database/migrations, database/seeders, resources/views, routes/web.php, composer.json (merge, don't overwrite)
composer install
php artisan migrate --seed
php artisan serve
```

You'll also need Tailwind set up (Laravel's default Vite + Tailwind starter
is fine) and Alpine.js loaded in your layout for the FAQ accordion
(`x-data`, `x-show`, `x-collapse`).

Create `resources/views/components/layout.blade.php` as your `<html>`
shell — it should accept `title` and `description` props and render
`{{ $slot }}`.

## Data model

- **pages** — one row per route (`home`, `about`, `solutions`, `contact`).
- **sections** — ordered blocks on a page (`hero`, `feature_grid`, `faq`,
  `cta`, etc). `type` maps directly to a Blade component in
  `resources/views/components/sections/{type}.blade.php`.
- **section_items** — the repeating children inside a section: feature
  cards, FAQ entries, stats, steps. Same table shape reused for all of
  them via the `meta` JSON column for anything type-specific.

Adding a brand-new kind of section later means: one migration is *not*
needed — just add a `type` value and a matching Blade component. Only add
a migration if a section type needs a genuinely new column (rare, since
`content`/`meta` JSON columns absorb most of that).

## Staged roadmap

1. **This stage** — skeleton renders pages from the DB, no admin UI yet
   (edit content via `php artisan tinker` or the seeder for now).
2. **Admin panel** — add `filament/filament`, build one `PageResource`
   with a repeater field for sections and a nested repeater for items.
   This is what gives non-technical users the WordPress-style editing
   screen — one screen pattern for every page, not a custom form per
   section type.
3. **Media uploads** — add `spatie/laravel-medialibrary`, add a
   `media` relationship to `Section`/`SectionItem`, swap Filament text
   inputs for `FileUpload` components. Drag-and-drop image uploads,
   same as Framer.
4. **Polish** — demo request form + notification/email, SEO fields,
   Alpine-driven animations to match the Framer feel.

Commit stage 1 once `php artisan serve` renders the seeded homepage
correctly — that's a safe, working checkpoint before layering the admin
panel on top.
