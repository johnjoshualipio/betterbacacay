<x-civic.layout :title="$destination['title'] . ' | Tourism'" :description="$destination['summary']" :image="$site['images'][$destination['image']]">
    <x-civic.page-hero eyebrow="{{ $destination['category'] }}" :title="$destination['title']" :description="$destination['summary']" :image="$site['images'][$destination['image']]" image-alt="Concept artwork for a BetterBacacay destination">
        <x-civic.cta href="{{ route('tourism') }}" variant="outline" icon="arrow-right">Back to tourism</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">{{ $destination['category'] }}</p>
                <h2>Explore with care.</h2>
                <p>{{ $destination['description'] }}</p>
                @if (!empty($destination['visit_note']))
                    <div class="civic-independence" style="margin-top:20px"><x-civic.icon name="shield" size="17" /><p>{{ $destination['visit_note'] }}</p></div>
                @endif
                @if ($destination['status'] === 'needs_verification')
                    <x-civic.empty-state href="{{ route('contact') }}" title="Visitor details being verified" description="Access, fees, hours, safety guidance, and community information should be checked with an official or local source before your visit." />
                @endif
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images'][$destination['image']], '/')) }}" alt="Concept artwork for {{ $destination['title'] }}" loading="lazy"></div>
        </div>
        <div class="civic-container"><x-civic.source-meta :sources="$destination['sources']" :last-verified="$destination['last_verified']" /></div>
    </section>
    @if (!empty($destination['highlights']))
        <section class="civic-section civic-section--mist">
            <div class="civic-container">
                <x-civic.section-heading eyebrow="What the sources say" title="Highlights" description="These are source-linked points, not a substitute for current local visitor guidance." />
                <div class="civic-resource-grid">
                    @foreach ($destination['highlights'] as $highlight)
                        <x-civic.card :title="$highlight" icon="spark" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</x-civic.layout>
