<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'type',
        'order',
        'is_visible',
        'eyebrow',
        'heading',
        'subheading',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
        'is_visible' => 'boolean',
    ];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(SectionItem::class)->orderBy('order');
    }

    /**
     * The Blade component view for this section's type.
     * e.g. type "feature_grid" -> components.sections.feature-grid
     */
    public function componentView(): string
    {
        return 'components.sections.' . str_replace('_', '-', $this->type);
    }
}
