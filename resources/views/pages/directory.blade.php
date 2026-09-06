<x-civic.layout title="Office Directory | BetterBacacay" description="Find public office starting points and contact information.">
    <x-civic.page-hero eyebrow="People · Offices · Service" title="Find the right <strong>starting point.</strong>" description="Browse public office information for the next step. Contact details are shown only when sourced and verified." :image="$site['images']['community']" image-alt="Concept artwork of a coastal town">
        <x-civic.cta href="{{ route('emergency') }}" icon="alert">Emergency contacts</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Directory" title="Public offices" description="Many records are still being compiled. Please confirm details with the office before relying on them." />
            <div class="civic-feature-grid">
                @foreach ($offices as $office)
                    <article class="civic-contact-card">
                        <div class="civic-contact-card__icon"><x-civic.icon name="building" size="22" /></div>
                        <div>
                            <h3>{{ $office['name'] }}</h3>
                            <p>{{ $office['description'] }}</p>
                            @if ($office['address'])<p style="margin-top:8px"><strong>Address:</strong> {{ $office['address'] }}</p>@endif
                            @if ($office['phone'])<p><strong>Phone:</strong> {{ $office['phone'] }}</p>@endif
                            @if ($office['email'])<p><strong>Email:</strong> <a href="mailto:{{ $office['email'] }}">{{ $office['email'] }}</a></p>@endif
                            @if ($office['status'] === 'needs_verification')<span class="civic-status">Details being verified</span>@endif
                        </div>
                    </article>
                @endforeach
            </div>
            <x-civic.source-meta :last-verified="$site['verified_on']" />
        </div>
    </section>
</x-civic.layout>
