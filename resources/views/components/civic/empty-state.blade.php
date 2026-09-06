@props([
    'title' => 'Information is being compiled',
    'description' => 'We are gathering and verifying the details for this section. Check back soon or send us a correction to help improve this guide.',
    'href' => null,
])

<div class="civic-empty-state">
    <div class="civic-empty-state__icon"><x-civic.icon name="document" size="25" /></div>
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    @if ($href)
        <x-civic.cta :href="$href" variant="outline" icon="message">Share an update</x-civic.cta>
    @endif
</div>
