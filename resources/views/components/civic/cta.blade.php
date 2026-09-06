@props([
    'href' => '#',
    'variant' => 'primary',
    'icon' => null,
    'external' => false,
])

@php
    $variantClass = match ($variant) {
        'outline' => 'civic-cta--outline',
        'light' => 'civic-cta--light',
        'quiet' => 'civic-cta--quiet',
        default => 'civic-cta--primary',
    };
@endphp

<a href="{{ $href }}" @if ($external) target="_blank" rel="noreferrer" @endif {{ $attributes->class(['civic-cta', $variantClass]) }}>
    @if ($icon)
        <span class="civic-cta__icon"><x-civic.icon :name="$icon" size="19" /></span>
    @endif
    <span>{{ $slot }}</span>
    <x-civic.icon :name="$external ? 'arrow-up-right' : 'arrow-right'" size="19" />
</a>
