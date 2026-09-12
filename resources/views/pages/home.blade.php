<x-civic.layout title="Your community guide to Bacacay" :description="$site['tagline']" :image="$site['images']['hero']">
    <x-civic.page-hero title="Your community<br>guide to <strong>Bacacay.</strong>" description="Find local information, government services, tourism destinations, and community resources in one place. Stay connected, informed, and empowered in Bacacay." :image="$site['images']['hero']" image-alt="Concept artwork of Bacacay's coast and islands">
        <x-civic.cta href="{{ route('tourism') }}" icon="compass">Explore Bacacay</x-civic.cta>
        <x-civic.cta href="{{ route('services') }}" variant="outline" icon="document">View government services</x-civic.cta>
    </x-civic.page-hero>

    <section class="civic-section civic-section--tight">
        <div class="civic-container civic-quick-grid">
            @foreach ($quickLinks as $link)
                <x-civic.card :title="$link['title']" :description="$link['description']" :icon="$link['icon']" :href="route($link['href'])" variant="quick" />
            @endforeach
        </div>
    </section>

    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Featured" title="Highlights from Bacacay" description="Explore stories from our town and nearby island destinations." :link="route('news')" link-label="View all news" />
            <div class="civic-feature-grid">
                @foreach ($highlights as $highlight)
                    <x-civic.card :title="$highlight['title']" :description="$highlight['summary']" :category="$highlight['category']" :meta="date('M j, Y', strtotime($highlight['published_at']))" :image="$site['images'][$highlight['image']]" :href="route('news.show', $highlight['slug'])" :status="$highlight['status']" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--mist">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Start here" title="Services that matter" description="Find clear starting points for public information. Details marked for verification should be confirmed with the responsible office." :link="route('services')" link-label="View all services" />
            <div class="civic-service-grid">
                @foreach ($services as $service)
                    <x-civic.card :title="$service['title']" :description="$service['summary']" :icon="$service['icon']" :href="route('services.show', $service['slug'])" :status="$service['status']" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">A place worth knowing</p>
                <h2>Discover Bacacay,<br><span style="color: var(--civic-teal)">para sa lahat.</span></h2>
                <p>From island landscapes to living craft traditions, find thoughtful ways to explore Bacacay and support the people who call it home.</p>
                <x-civic.cta href="{{ route('tourism') }}" icon="island">Explore tourism</x-civic.cta>
            </div>
            <div class="civic-art-frame">
                <img src="{{ asset(ltrim($site['images']['island'], '/')) }}" alt="Concept artwork of a tropical island and turquoise water" loading="lazy">
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--mist">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Our community" title="Better information, together" description="The portal grows through careful sourcing and community participation." :link="route('barangays')" link-label="Browse barangays" />
            <div class="civic-fact-grid">
                @foreach ($facts as $fact)
                    <div class="civic-fact">
                        <span class="civic-fact__icon"><x-civic.icon :name="$fact['icon']" size="24" /></span>
                        <strong>{{ $fact['value'] }}</strong>
                        <span>{{ $fact['label'] }}</span>
                        <p>{{ $fact['description'] }}</p>
                    </div>
                @endforeach
            </div>
            <x-civic.source-meta :sources="['psa_barangays', 'albay_tourism', 'bacacay_water']" :last-verified="$site['verified_on']" label="Profile references" />
        </div>
    </section>

    <section class="civic-section">
        <div class="civic-container civic-intro-grid">
            <div class="civic-intro-grid__copy">
                <p class="civic-eyebrow">A place with a point of view</p>
                <h2>Coast, islands, and <span style="color:var(--civic-teal)">community.</span></h2>
                <p>Bacacay is a first-class municipality in Albay with 56 barangays and a 2024 population of 72,298 in the PSA geographic profile. Its public tourism story connects black-sand shores, Cagraray, Sula Channel, mountain views, and karagumoy craft.</p>
                <x-civic.cta href="{{ route('sources') }}" variant="outline" icon="document">See the references</x-civic.cta>
            </div>
            <div class="civic-art-frame">
                <img src="{{ asset(ltrim($site['images']['community'], '/')) }}" alt="Concept artwork of a Bacacay coastal community" loading="lazy">
            </div>
        </div>
    </section>

    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Be part of a brighter Bacacay" title="Small actions, shared impact" description="Help maintain a more accurate and connected local information guide." />
            <div class="civic-resource-grid">
                @foreach ($actions as $action)
                    <x-civic.card :title="$action['title']" :description="$action['description']" :icon="$action['icon']" :href="route($action['href'])" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="civic-section civic-section--tight">
        <div class="civic-container civic-newsletter">
            <div>
                <p class="civic-eyebrow">Stay connected</p>
                <h2>Get the latest updates</h2>
                <p>Subscribe for occasional news about new guides, sources, and community updates on BetterBacacay.</p>
            </div>
            <form method="POST" action="{{ route('submissions.store') }}">
                @csrf
                <input type="hidden" name="type" value="newsletter">
                <input type="hidden" name="page_url" value="{{ url()->current() }}">
                <input class="civic-input" type="email" name="email" value="{{ old('email') }}" placeholder="Your email address" aria-label="Email address" required>
                <input class="civic-honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button class="civic-cta civic-cta--primary" type="submit">Subscribe <x-civic.icon name="arrow-right" size="18" /></button>
            </form>
        </div>
        @if (session('submission_success'))
            <p class="civic-form-success civic-container" role="status">{{ session('submission_success') }}</p>
        @endif
    </section>
</x-civic.layout>
