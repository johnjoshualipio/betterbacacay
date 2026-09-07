<x-civic.layout :title="$barangay['name'] . ' | BetterBacacay'" :description="$barangay['summary']">
    <x-civic.page-hero eyebrow="Barangay profile" :title="$barangay['name']" :description="$barangay['summary']" :image="$site['images']['community']" image-alt="Concept artwork of a coastal community">
        <x-civic.cta href="{{ route('barangays') }}" variant="outline" icon="arrow-right">Back to barangays</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">Community information</p>
                <h2>{{ $barangay['name'] }} deserves a useful profile.</h2>
                <p><strong>{{ number_format($barangay['population']) }}</strong> residents in the 2024 POPCEN · <strong>{{ $barangay['classification'] }}</strong> classification in the PSA PSGC.</p>
                <p>{{ $barangay['description'] }}</p>
                <x-civic.empty-state href="{{ route('contact') }}" title="Profile being compiled" description="We are verifying local facilities, contacts, services, and community links before publishing them." />
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['community'], '/')) }}" alt="Concept artwork of Bacacay's coast" loading="lazy"></div>
        </div>
        <div class="civic-container"><x-civic.source-meta :sources="$barangay['sources']" :last-verified="$barangay['last_verified']" /></div>
    </section>
</x-civic.layout>
