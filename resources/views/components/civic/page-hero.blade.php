@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'image' => null,
    'imageAlt' => '',
    'align' => 'left',
    'location' => null,
    'locationRegion' => 'Bacacay, Albay',
])

@php
    $locationLabel = $location ?? (str_ends_with((string) $image, 'island-aerial.png') ? 'Cagraray Island' : 'Bacacay Coast');
@endphp

<section @class(['civic-page-hero', 'civic-page-hero--center' => $align === 'center'])>
    <div class="civic-container civic-page-hero__grid">
        <div class="civic-page-hero__copy">
            @if ($eyebrow)
                <p class="civic-eyebrow">{{ $eyebrow }}</p>
            @endif
            <h1>{!! $title !!}</h1>
            @if ($description)
                <p class="civic-page-hero__description">{{ $description }}</p>
            @endif
            @if (isset($slot) && trim($slot) !== '')
                <div class="civic-page-hero__actions">{{ $slot }}</div>
            @endif
        </div>
        @if ($image)
            <div class="civic-page-hero__visual">
                <img src="{{ asset(ltrim($image, '/')) }}" alt="{{ $imageAlt }}" fetchpriority="high">
            </div>
        @endif
    </div>
    @if ($image && $locationLabel)
        <div class="civic-container civic-page-hero__location" aria-label="Hero image location">
            <div class="civic-page-hero__location-copy">
                <span class="civic-page-hero__location-name">{{ $locationLabel }}</span>
                <span class="civic-page-hero__location-region">{{ $locationRegion }}</span>
            </div>
        </div>
    @endif
    <x-civic.wave variant="hero" />
</section>
