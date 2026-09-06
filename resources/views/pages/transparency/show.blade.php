<x-civic.layout :title="$section['title'] . ' | Transparency'" :description="$section['summary']">
    <x-civic.page-hero eyebrow="Transparency" :title="$section['title']" :description="$section['summary']" :image="$site['images']['community']" image-alt="Concept artwork of Bacacay's community">
        <x-civic.cta href="{{ route('transparency') }}" variant="outline" icon="arrow-right">Back to transparency</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            @if (count($section['records']))
                <div class="civic-resource-grid">@foreach ($section['records'] as $record)<x-civic.card :title="$record['title']" :description="$record['summary']" icon="document" />@endforeach</div>
            @else
                <x-civic.empty-state href="{{ route('contact') }}" title="This section is being compiled" description="We are verifying the official records, source location, and last-updated date before publishing this section." />
            @endif
            <x-civic.source-meta :sources="$section['sources']" :last-verified="$section['last_verified']" />
        </div>
    </section>
</x-civic.layout>
