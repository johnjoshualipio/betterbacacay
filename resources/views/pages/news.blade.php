<x-civic.layout title="News | BetterBacacay" description="Community news, announcements, and stories from Bacacay." :image="$site['images']['community']">
    <x-civic.page-hero eyebrow="News · Community · Participation" title="Stay updated with <strong>Bacacay.</strong>" description="Read carefully sourced stories, announcements, and community notes that help people stay informed and connected." :image="$site['images']['community']" image-alt="Concept artwork of Bacacay's coastline">
        <x-civic.cta href="{{ route('contact') }}" icon="mail">Share an update</x-civic.cta>
    </x-civic.page-hero>
    <section class="civic-section">
        <div class="civic-container">
            <x-civic.section-heading eyebrow="Latest stories" title="News and announcements" description="Stories are labeled when details still need verification." />
            <div class="civic-feature-grid">
                @foreach ($articles as $article)
                    <x-civic.card :title="$article['title']" :description="$article['summary']" :category="$article['category']" :meta="date('M j, Y', strtotime($article['published_at']))" :image="$site['images'][$article['image']]" :href="route('news.show', $article['slug'])" :status="$article['status']" />
                @endforeach
            </div>
            <x-civic.source-meta :sources="['psa_barangays', 'dilg_bacacay', 'karagumoy']" :last-verified="$site['verified_on']" label="Story references" />
        </div>
    </section>
</x-civic.layout>
