<x-civic.layout title="Barangays | BetterBacacay" description="Browse the 56 barangays of Bacacay.">
    <x-civic.page-hero eyebrow="People · Communities · Connection" title="Every barangay is <strong>part of Bacacay.</strong>" description="Browse the 56 barangays listed in the Philippine Standard Geographic Code and help us build useful local profiles." :image="$site['images']['community']" image-alt="Concept artwork of a coastal Bacacay community">
        <x-civic.cta href="{{ route('contact') }}" variant="outline" icon="message">Suggest a source</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Community directory" title="{{ count($barangays) }} barangays" description="Search the directory or select a community to see its current public information." />
            <form class="civic-search-form" method="GET" action="{{ route('barangays') }}">
                <label class="civic-sr-only" for="barangay-search">Search barangays</label>
                <input class="civic-input" id="barangay-search" type="search" name="q" value="{{ $query }}" placeholder="Search by barangay name">
                <button class="civic-cta civic-cta--primary" type="submit"><x-civic.icon name="search" size="18" /> Search</button>
                @if ($query)<a class="civic-cta civic-cta--quiet" href="{{ route('barangays') }}">Clear</a>@endif
            </form>
            @if ($barangays)
                <div class="civic-resource-grid civic-directory-grid">
                    @foreach ($barangays as $barangay)
                        <x-civic.card :title="$barangay['name']" :description="$barangay['summary']" :icon="$barangay['icon']" :href="route('barangays.show', $barangay['slug'])" :status="$barangay['status']" />
                    @endforeach
                </div>
            @else
                <x-civic.empty-state title="No barangays matched that search" description="Try a shorter search or browse the complete directory." href="{{ route('barangays') }}" />
            @endif
            <x-civic.source-meta sources="psa_barangays" :last-verified="$site['verified_on']" label="Directory source" />
        </div>
    </section>
</x-civic.layout>
