@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'image' => null,
    'imageAlt' => '',
    'align' => 'left',
])

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
                <span class="civic-page-hero__glow" aria-hidden="true"></span>
            </div>
        @endif
    </div>
    <x-civic.wave variant="hero" />
</section>
