<x-civic.layout title="Search | BetterBacacay" description="Search BetterBacacay public information.">
    <x-civic.page-hero eyebrow="Find your way around" title="Search <strong>Bacacay.</strong>" description="Look across services, barangays, destinations, and community stories." :image="$site['images']['hero']" image-alt="Concept artwork of Bacacay's coast">
        <form class="civic-search-form" method="GET" action="{{ route('search') }}">
            <label class="civic-sr-only" for="portal-search">Search the portal</label>
            <input class="civic-input" id="portal-search" type="search" name="q" value="{{ $query }}" placeholder="Try “health”, “Cagraray”, or “barangay”">
            <button class="civic-cta civic-cta--primary" type="submit"><x-civic.icon name="search" size="18" /> Search</button>
        </form>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            @if ($query && $results)
                <x-civic.section-heading eyebrow="Search results" title="{{ count($results) }} matches for “{{ $query }}”" />
                <div class="civic-resource-grid">@foreach ($results as $result)<x-civic.card :title="$result['title']" :description="$result['description']" :category="$result['category']" :icon="$result['icon']" :href="$result['href']" />@endforeach</div>
            @elseif ($query)
                <x-civic.empty-state title="No results for “{{ $query }}”" description="Try a different phrase or browse the main sections." href="{{ route('home') }}" />
            @else
                <x-civic.empty-state title="Search the public guide" description="Enter a word or place name to look across BetterBacacay." />
            @endif
        </div>
    </section>
</x-civic.layout>
