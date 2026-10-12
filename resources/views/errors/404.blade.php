<x-civic.layout title="Page not found" description="The BetterBacacay page you requested could not be found.">
    <section class="civic-section civic-section--tight">
        <div class="civic-container">
            <x-civic.empty-state title="That page is not here" description="The link may be outdated, or the information is not part of the public guide yet." href="{{ route('home') }}" link-label="Return home" :heading-level="1" />
        </div>
    </section>
</x-civic.layout>
