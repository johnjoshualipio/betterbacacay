<x-civic.layout :title="$article['title'] . ' | News'" :description="$article['summary']" :image="$site['images'][$article['image']]">
    <x-civic.page-hero eyebrow="{{ $article['category'] }}" :title="$article['title']" :description="$article['summary']" :image="$site['images'][$article['image']]" image-alt="Concept artwork for a BetterBacacay news story">
        <x-civic.cta href="{{ route('news') }}" variant="outline" icon="arrow-right">Back to news</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container civic-reading-column">
            <p class="civic-eyebrow">{{ date('F j, Y', strtotime($article['published_at'])) }} · {{ $article['category'] }}</p>
            <h2>{{ $article['title'] }}</h2>
            <p class="civic-lead">{{ $article['description'] }}</p>
            @if ($article['status'] === 'needs_verification')
                <x-civic.empty-state href="{{ route('contact') }}" title="Story details being verified" description="This story is a community-facing summary, not an official notice. Confirm dates, venues, and program details with the linked source." />
            @endif
            <x-civic.source-meta :sources="$article['sources']" :last-verified="$article['last_verified']" />
        </div>
    </section>
</x-civic.layout>
