<x-civic.layout title="Transparency | BetterBacacay" description="Source-aware public information and transparency links for Bacacay.">
    <x-civic.page-hero eyebrow="Open information · Accountability · Trust" title="A clearer view of <strong>public information.</strong>" description="Transparency starts with accessible records, clear sources, and honest status labels." :image="$site['images']['community']" image-alt="Concept artwork of Bacacay's community">
        <x-civic.cta href="{{ route('directory') }}" icon="building">Browse office directory</x-civic.cta>
        <x-civic.cta href="{{ route('contact') }}" variant="outline" icon="message">Suggest a record</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.independence />
            <div class="civic-section-heading" style="margin-top:42px"><div><p class="civic-eyebrow">Public records</p><div class="civic-section-heading__title-row"><h2>What we are compiling</h2><span class="civic-rule"></span></div><p>Each section will link directly to a verified source when one is available.</p></div></div>
            <div class="civic-feature-grid">
                @foreach ($sections as $key => $item)
                    <x-civic.card :title="$item['title']" :description="$item['summary']" icon="document" :href="route('transparency.section', $key)" status="needs_verification" />
                @endforeach
            </div>
        </div>
    </section>
</x-civic.layout>
