<x-civic.layout :title="$service['title'] . ' | BetterBacacay'" :description="$service['summary']">
    <x-civic.page-hero eyebrow="Public service" :title="$service['title']" :description="$service['summary']" :image="$site['images']['hero']" image-alt="Concept artwork of Bacacay's coast">
        <x-civic.cta href="{{ route('services') }}" variant="outline" icon="arrow-right">Back to services</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">{{ $service['category'] }}</p>
                <h2>{{ $service['title'] }}</h2>
                <p>{{ $service['description'] }}</p>
                @if ($service['status'] === 'needs_verification')
                    <x-civic.empty-state href="{{ route('contact') }}" title="This guide is being compiled" description="We are verifying requirements, office details, fees, and processing times before presenting them as current." />
                @endif
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['community'], '/')) }}" alt="Concept artwork for a civic service page" loading="lazy"></div>
        </div>
        <div class="civic-container"><x-civic.source-meta :sources="$service['sources']" :last-verified="$service['last_verified']" /></div>
    </section>
</x-civic.layout>
