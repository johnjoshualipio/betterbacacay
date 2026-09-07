<x-civic.layout title="About BetterBacacay" :description="$site['tagline']" :image="$site['images']['community']">
    <x-civic.page-hero eyebrow="People · Places · Opportunities" title="A clearer guide to <strong>Bacacay.</strong>" description="BetterBacacay brings together public information, local context, and community-sourced corrections in one calm, useful place." :image="$site['images']['community']" image-alt="Concept artwork of a coastal community">
        <x-civic.cta href="{{ route('services') }}" icon="document">Find a service</x-civic.cta>
        <x-civic.cta href="{{ route('contact') }}" variant="outline" icon="message">Help improve this guide</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">Our purpose</p>
                <h2>Useful information should feel <span style="color:var(--civic-teal)">close to home.</span></h2>
                <p>We are building an independent public guide for residents, visitors, and community partners who want to understand Bacacay and find a responsible next step.</p>
                <p>Every factual record should have a source and a verification date. When that work is not complete, we say so clearly.</p>
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['community'], '/')) }}" alt="Concept artwork of Bacacay homes beside the sea" loading="lazy"></div>
        </div>
    </section>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Bacacay in brief" title="A municipality shaped by coast and connection" description="The public record gives us a useful starting point, while local profiles still need community review." />
            <div class="civic-feature-grid">
                <x-civic.card title="56 barangays" description="The PSA PSGC lists 56 barangays as of 31 July 2025, with urban or rural classifications and 2024 population counts." icon="people" />
                <x-civic.card title="72,298 people" description="The latest population figure shown on the PSA municipality profile is from the 2024 POPCEN." icon="people" />
                <x-civic.card title="A coastal gateway" description="The Province of Albay places Bacacay in the East Coast tourism circuit, linking beaches, islands, waterways, and mountain experiences." icon="waves" />
            </div>
            <x-civic.source-meta :sources="['psa_barangays', 'albay_tourism']" :last-verified="$site['verified_on']" label="Municipal profile references" />
        </div>
    </section>
    <section class="civic-section civic-section--mist">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="What we stand for" title="A stronger community starts with trust" description="The portal is designed around clarity, independence, and participation." />
            <div class="civic-feature-grid">
                <x-civic.card title="Source first" description="We link to primary or official sources wherever factual information is published." icon="document" />
                <x-civic.card title="Status honestly shown" description="Information still being checked is labeled instead of presented as complete." icon="shield" />
                <x-civic.card title="Built with people" description="Residents can submit corrections, broken links, and source suggestions." icon="people" />
            </div>
            <x-civic.source-meta :sources="['psa_barangays', 'karagumoy']" :last-verified="$site['verified_on']" />
        </div>
    </section>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.independence />
            <div class="civic-fact-grid" style="margin-top:22px">
                @foreach ($facts as $fact)
                    <div class="civic-fact"><span class="civic-fact__icon"><x-civic.icon :name="$fact['icon']" size="24" /></span><strong>{{ $fact['value'] }}</strong><span>{{ $fact['label'] }}</span><p>{{ $fact['description'] }}</p></div>
                @endforeach
            </div>
        </div>
    </section>
</x-civic.layout>
