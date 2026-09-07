<x-civic.layout title="Sources and Credits | BetterBacacay" description="Research references, official links, and visual credits for BetterBacacay.">
    <x-civic.page-hero eyebrow="References · Credits · Accountability" title="Follow the <strong>source trail.</strong>" description="BetterBacacay is an independent guide. These links show where the factual content comes from and where to verify details before relying on them." :image="$site['images']['community']" image-alt="Concept artwork of a Bacacay coastal community">
        <x-civic.cta href="{{ route('about') }}" variant="outline" icon="arrow-right">About this project</x-civic.cta>
    </x-civic.page-hero>

    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Research references" title="Primary links first" description="Government, agency, and first-party sources are linked near the claims they support. Some visitor and heritage details still need local confirmation." />
            <div class="civic-feature-grid">
                @foreach ($sources as $source)
                    <article class="civic-contact-card">
                        <div class="civic-contact-card__icon"><x-civic.icon name="document" size="22" /></div>
                        <div>
                            <p class="civic-eyebrow">{{ $source['organization'] ?? 'Reference' }}</p>
                            <h3><a href="{{ $source['url'] ?? '#' }}" target="_blank" rel="noreferrer noopener">{{ $source['title'] ?? 'Source' }} <span aria-hidden="true">↗</span></a></h3>
                            @if (!empty($source['description']))<p>{{ $source['description'] }}</p>@endif
                            <p class="civic-card__meta">Accessed: {{ $source['accessed'] ?? $site['verified_on'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--mist">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">Visual credits</p>
                <h2>Images are <span style="color:var(--civic-teal)">illustrative.</span></h2>
                <p>{{ $site['image_credit'] }}</p>
                <p>Decorative artwork should not be read as documentary evidence of a specific beach, building, person, event, or barangay.</p>
            </div>
            <div class="civic-art-frame"><img src="{{ asset(ltrim($site['images']['weave'], '/')) }}" alt="Concept artwork of karagumoy weaving" loading="lazy"></div>
        </div>
    </section>
</x-civic.layout>
