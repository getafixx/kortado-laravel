<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $home = Page::create([
            'title' => 'Compliance you can prove – for NDIS and Aged Care',
            'slug' => 'home',
            'meta_description' => 'Continuous compliance and audit readiness for NDIS and aged care providers.',
        ]);

        $hero = $home->sections()->create([
            'type' => 'hero',
            'order' => 1,
            'heading' => 'Compliance you can prove – for NDIS and Aged Care',
            'subheading' => 'Kortado connects your records to see what\'s compliant, what\'s not, and the evidence behind it — operationally and in audit.',
            'content' => ['cta_text' => 'Request a demo', 'cta_url' => '/demo'],
        ]);

        $features = $home->sections()->create([
            'type' => 'feature_grid',
            'order' => 2,
            'eyebrow' => 'Features',
            'heading' => 'Built for audit scrutiny',
            'subheading' => 'Designed for high-volume environments where evidence must stand up to review.',
        ]);

        $features->items()->createMany([
            ['order' => 1, 'title' => 'Automated evidence review', 'body' => 'Review high volumes of records against standards to confirm what meets requirements — and what\'s missing.'],
            ['order' => 2, 'title' => 'Evidence relevance assessment', 'body' => 'Identify what\'s required, exclude what isn\'t, and link findings directly to source records.'],
            ['order' => 3, 'title' => 'Coverage across care standards', 'body' => 'Evaluate against external standards, internal policies, and custom frameworks.'],
        ]);

        $faq = $home->sections()->create([
            'type' => 'faq',
            'order' => 3,
            'heading' => 'Frequently Asked Questions',
        ]);

        $faq->items()->createMany([
            ['order' => 1, 'title' => 'Is Kortado designed for large or enterprise providers?', 'body' => 'Yes — built for high record volumes, multiple services, and formal audit requirements across NDIS and aged care.'],
            ['order' => 2, 'title' => 'Is Kortado just a large language model or a ChatGPT wrapper?', 'body' => 'No — purpose-built for regulated care. It analyses records against standards and evidence requirements.'],
            ['order' => 3, 'title' => 'Does this replace our existing systems?', 'body' => 'No — it sits alongside your current platforms and clarifies what\'s already being created.'],
        ]);
    }
}
