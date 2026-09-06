<footer class="civic-footer">
    <x-civic.wave variant="footer" />
    <div class="civic-container civic-footer__content">
        <div class="civic-footer__brand">
            <a class="civic-brand civic-brand--footer" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-word.png') }}" alt="BetterBacacay" width="260" height="67">
            </a>
            <p>Our people. Our home. A brighter Bacacay.</p>
            <p class="civic-footer__mission">A community-first guide to local information, services, places, and opportunities.</p>
        </div>
        <div>
            <p class="civic-footer__label">Explore</p>
            <div class="civic-footer__links">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('services') }}">Services</a>
                <a href="{{ route('barangays') }}">Barangays</a>
                <a href="{{ route('tourism') }}">Tourism</a>
                <a href="{{ route('news') }}">News</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </div>
        <div>
            <p class="civic-footer__label">Public resources</p>
            <div class="civic-footer__links">
                <a href="{{ route('directory') }}">Office directory</a>
                <a href="{{ route('transparency') }}">Transparency</a>
                <a href="{{ route('emergency') }}">Emergency contacts</a>
                <a href="{{ config('civic.sources.bettergov.url') }}" target="_blank" rel="noreferrer">BetterGov.ph <span aria-hidden="true">↗</span></a>
                <a href="{{ route('sitemap') }}">Sitemap</a>
            </div>
        </div>
        <div class="civic-footer__note">
            <p class="civic-footer__script">Our home. Our people.<br>A brighter Bacacay.</p>
            <x-civic.independence compact />
        </div>
    </div>
    <div class="civic-container civic-footer__bottom">
        <span>© {{ now()->year }} BetterBacacay</span>
        <span>Independent civic information project</span>
    </div>
</footer>
