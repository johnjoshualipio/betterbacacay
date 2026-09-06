@props([
    'sources' => [],
    'lastVerified' => null,
    'label' => 'Source notes',
])

@php
    $sourceKeys = is_array($sources) ? $sources : [$sources];
    $resolvedSources = collect($sourceKeys)
        ->map(fn ($source) => is_array($source) ? $source : config('civic.sources.' . $source))
        ->filter()
        ->values();
@endphp

<div class="civic-source-meta">
    <span class="civic-source-meta__label">{{ $label }}</span>
    @if ($resolvedSources->isNotEmpty())
        <span class="civic-source-meta__links">
            @foreach ($resolvedSources as $source)
                <a href="{{ $source['url'] ?? '#' }}" target="_blank" rel="noreferrer">
                    {{ $source['title'] ?? ($source['organization'] ?? 'Official source') }} <span aria-hidden="true">↗</span>
                </a>
            @endforeach
        </span>
    @else
        <span>Maintainer research in progress</span>
    @endif
    <span>Last verified: {{ $lastVerified ?: 'Not yet verified' }}</span>
</div>
