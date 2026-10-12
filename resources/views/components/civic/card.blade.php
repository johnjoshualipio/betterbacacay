@props([
    'title',
    'description' => null,
    'href' => null,
    'icon' => null,
    'image' => null,
    'category' => null,
    'meta' => null,
    'variant' => 'default',
    'status' => null,
])

<article @class(['civic-card', 'civic-card--' . $variant, 'civic-card--linked' => $href])>
    @if ($image)
        <div class="civic-card__image-wrap">
            <img class="civic-card__image" src="{{ asset(ltrim($image, '/')) }}" alt="" loading="lazy">
            @if ($category)
                <span class="civic-card__category">{{ $category }}</span>
            @endif
        </div>
    @elseif ($icon)
        <div class="civic-card__icon"><x-civic.icon :name="$icon" size="25" /></div>
    @endif
    <div class="civic-card__body">
        @if ($meta)
            <p class="civic-card__meta">{{ $meta }}</p>
        @endif
        @if ($category && ! $image)
            <p class="civic-card__eyebrow">{{ $category }}</p>
        @endif
        @if ($variant === 'quick')
            <h2 class="civic-card__title">
        @else
            <h3 class="civic-card__title">
        @endif
            @if ($href)
                <a href="{{ $href }}">{{ $title }}</a>
            @else
                {{ $title }}
            @endif
        @if ($variant === 'quick')
            </h2>
        @else
            </h3>
        @endif
        @if ($description)
            <p class="civic-card__description">{{ $description }}</p>
        @endif
        @if ($status === 'needs_verification')
            <span class="civic-status">Details being verified</span>
        @endif
        @if ($href)
            <a class="civic-card__arrow" href="{{ $href }}" aria-label="View {{ $title }}">
                <x-civic.icon name="arrow-right" size="18" />
            </a>
        @endif
    </div>
</article>
