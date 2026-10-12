@props([
    'title' => 'Information is being compiled',
    'description' => 'We are gathering and verifying the details for this section. Check back soon or send us a correction to help improve this guide.',
    'href' => null,
    'linkLabel' => 'Share an update',
    'headingLevel' => 2,
])

<div class="civic-empty-state">
    <div class="civic-empty-state__icon"><x-civic.icon name="document" size="25" /></div>
    @if ($headingLevel === 1)
        <h1>{{ $title }}</h1>
    @else
        <h2>{{ $title }}</h2>
    @endif
    <p>{{ $description }}</p>
    @if ($href)
        <x-civic.cta :href="$href" variant="outline" icon="arrow-right">{{ $linkLabel }}</x-civic.cta>
    @endif
</div>
