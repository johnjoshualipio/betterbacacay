<x-civic.layout title="Services | BetterBacacay" description="Starting points for public services and local information.">
    <x-civic.page-hero eyebrow="People · Services · A brighter tomorrow" title="Services that <strong>matter.</strong>" description="Find clear starting points for permits, health, social programs, preparedness, livelihoods, and more." :image="$site['images']['hero']" image-alt="Concept artwork of Bacacay's coastal community">
        <x-civic.cta href="{{ route('directory') }}" icon="building">Browse office directory</x-civic.cta>
        <x-civic.cta href="{{ route('contact') }}" variant="outline" icon="message">Ask a question</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Start here" title="Public information, in one place" description="Choose a topic to see what is available and what still needs verification." />
            <div class="civic-service-grid">
                @foreach ($services as $service)
                    <x-civic.card :title="$service['title']" :description="$service['summary']" :icon="$service['icon']" :href="route('services.show', $service['slug'])" :status="$service['status']" />
                @endforeach
            </div>
            <x-civic.source-meta :last-verified="$site['verified_on']" />
        </div>
    </section>
    <section class="civic-section civic-section--mist">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">A useful local starting point</p>
                <h2>Public service information should be <span style="color:var(--civic-teal)">easy to verify.</span></h2>
                <p>The Bacacay Water District publishes an agency profile, services, citizen charter, and contact starting point. It is a helpful example of the kind of official source BetterBacacay will link to as more local service records become available.</p>
                <x-civic.cta href="{{ route('directory') }}" variant="outline" icon="building">Open the office directory</x-civic.cta>
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['community'], '/')) }}" alt="Concept artwork of a Bacacay public-service community" loading="lazy"></div>
        </div>
        <div class="civic-container"><x-civic.source-meta :sources="['bacacay_water', 'bettergov']" :last-verified="$site['verified_on']" label="Service references" /></div>
    </section>
</x-civic.layout>
