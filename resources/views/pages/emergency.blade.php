<x-civic.layout title="Emergency Contacts | BetterBacacay" description="Emergency contact information for Bacacay.">
    <x-civic.page-hero eyebrow="Safety · Preparedness · Urgent help" title="When help is <strong>urgent.</strong>" description="Use the national emergency hotline for immediate danger. Local contact details will be added after official verification." :image="$site['images']['hero']" image-alt="Concept artwork of Bacacay's coast">
        <x-civic.cta href="tel:911" icon="alert">Call 911</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <div class="civic-independence"><x-civic.icon name="alert" size="17" /><p>For immediate emergencies, call <strong>911</strong>. This page is an information guide, not an emergency dispatch service.</p></div>
            <div class="civic-feature-grid" style="margin-top:28px">
                @foreach ($hotlines as $hotline)
                    <article class="civic-contact-card">
                        <div class="civic-contact-card__icon"><x-civic.icon name="alert" size="22" /></div>
                        <div><h3>{{ $hotline['name'] }}</h3><p><a href="tel:{{ $hotline['number'] }}">{{ $hotline['number'] }}</a></p><p style="margin-top:6px">{{ $hotline['description'] }}</p><x-civic.source-meta :sources="[$hotline['source']]" :last-verified="$hotline['last_verified']" /></div>
                    </article>
                @endforeach
            </div>
            <div style="margin-top:42px">
                <x-civic.section-heading eyebrow="Official preparedness links" title="Check before you travel or respond" description="Weather and hazard information can change quickly. Use these official sources for current conditions." />
                <div class="civic-resource-grid">
                    @foreach ($site['emergency_resources'] ?? [] as $resource)
                        @php($source = config('civic.sources.' . $resource['source']))
                        <x-civic.card :title="$resource['title']" :description="$resource['description']" icon="shield" :href="$source['url']" />
                    @endforeach
                </div>
            </div>
            <x-civic.empty-state href="{{ route('contact') }}" title="Local contacts being verified" description="We are checking local emergency, health, and disaster-response contact details before publishing them." />
        </div>
    </section>
</x-civic.layout>
