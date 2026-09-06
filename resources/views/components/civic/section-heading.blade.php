@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'link' => null,
    'linkLabel' => 'View all',
])

<div class="civic-section-heading">
    <div>
        @if ($eyebrow)
            <p class="civic-eyebrow">{{ $eyebrow }}</p>
        @endif
        <div class="civic-section-heading__title-row">
            <h2>{{ $title }}</h2><span class="civic-rule" aria-hidden="true"></span>
        </div>
        @if ($description)
            <p>{{ $description }}</p>
        @endif
    </div>
    @if ($link)
        <a class="civic-text-link" href="{{ $link }}">{{ $linkLabel }} <x-civic.icon name="arrow-right" size="17" /></a>
    @endif
</div>
