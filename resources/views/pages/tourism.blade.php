<x-civic.layout title="Tourism | BetterBacacay" description="Discover Bacacay's islands, culture, and coastal experiences." :image="$site['images']['island']">
    <x-civic.page-hero eyebrow="Islands · Culture · Unforgettable experiences" title="Discover <strong>Bacacay.</strong>" description="Explore coastal landscapes, living craft traditions, and local experiences with care for the communities and places that make Bacacay home." :image="$site['images']['island']" image-alt="Concept artwork of an island aerial view">
        <x-civic.cta href="#destinations" icon="island">Plan your visit</x-civic.cta>
        <x-civic.cta href="{{ route('contact') }}" variant="outline" icon="message">Ask for a source</x-civic.cta>
    </x-civic.page-hero>
    <section id="destinations" class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Top destinations" title="Places to explore thoughtfully" description="Start with the landscape, then look for verified access, safety, and community guidance." />
            <div class="civic-destination-grid">
                @foreach ($destinations as $destination)
                    <x-civic.card :title="$destination['title']" :description="$destination['summary']" :category="$destination['category']" :image="$site['images'][$destination['image']]" :href="route('tourism.show', $destination['slug'])" :status="$destination['status']" />
                @endforeach
            </div>
            <x-civic.source-meta :last-verified="$site['verified_on']" />
        </div>
    </section>
    <section class="civic-section civic-section--mist">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="What to experience" title="More than a destination" description="Immersion is measured in connection, respect, and care." />
            <div class="civic-resource-grid">
                @foreach ($experiences as $experience)
                    <x-civic.card :title="$experience['title']" :description="$experience['description']" :icon="$experience['icon']" />
                @endforeach
            </div>
        </div>
    </section>
    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['weave'], '/')) }}" alt="Concept artwork of woven karagumoy strips" loading="lazy"></div>
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">Featured culture</p>
                <h2>{{ $culture['title'] }}</h2>
                <p>{{ $culture['summary'] }}</p>
                <p>{{ $culture['description'] }}</p>
                <x-civic.cta href="{{ route('tourism.show', 'karagumoy-weaving') }}" variant="outline" icon="weave">Learn about karagumoy</x-civic.cta>
                <x-civic.source-meta :sources="$culture['sources']" :last-verified="$culture['last_verified']" />
            </div>
        </div>
    </section>
</x-civic.layout>
